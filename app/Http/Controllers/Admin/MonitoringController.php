<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Test\Http\Controllers\Controller;
use Test\Model\Admin;
use Test\Model\Area;
use Test\Model\BranchAdmin;
use Test\Model\Group;
use Test\Model\Moderator;
use Test\Model\Monitoring;
use Test\Model\Schedule;
use Test\Model\Branch;
use DB;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->role==3)
        {
            $responsible = Teacher::where('user_id','=',\Auth::user()->id)->first();
            $data = Group::where('branch_id','=',$responsible->branch_id)->orderBy('edu_ending_date','desc')->paginate(5);
            return view('admin.pages.monitoring.index', [             // rendering to view page
                'data' => $data,
            ]);
        }
        if(\Auth::user()->role==4)
        {
            $responsible = Moderator::where('user_id','=',\Auth::user()->id)->first();
            $data = Group::where('branch_id','=',$responsible->branch_id)->orderBy('edu_ending_date','desc')->paginate(5);
            return view('admin.pages.monitoring.index', [             // rendering to view page
                'data' => $data,
            ]);
        }
        if(\Auth::user()->role==5)
        {
            $responsible = BranchAdmin::where('user_id','=',\Auth::user()->id)->first();
            $data = Group::where('branch_id','=',$responsible->branch_id)->orderBy('edu_ending_date','desc')->paginate(5);
            return view('admin.pages.monitoring.index', [             // rendering to view page
                'data' => $data,
            ]);
        }
        if(\Auth::user()->role==6)
        {
            $admin = Admin::where("user_id","=",\Auth::user()->id)->first();
            $areas = Area::where('region_id',$admin->region_id)->pluck('id');
            $branches = Branch::whereIn('area_id',$areas)->pluck('id');
            $data = Group::whereIn('branch_id',$branches)->orderBy('edu_ending_date','desc')->paginate(5);
            return view('admin.pages.monitoring.index', [             // rendering to view page
                'data' => $data,
            ]);
        }
        if(\Auth::user()->role==7)
        {
            $data = Group::orderBy('edu_ending_date','desc')->paginate(5);
            return view('admin.pages.monitoring .index', [             // rendering to view page
                'data' => $data,
            ]);
        }
        return view('norights');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('norights');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
            $schedule = Schedule::find($input['schedule_id']);
            if(time()-strtotime($schedule->ending_date)>0 && time()-strtotime($schedule->ending_date)<7200) {
                if (Monitoring::where('schedule_id', $schedule->id)->exists()) {
                    $monitorings = Monitoring::where('schedule_id', $schedule->id)->get();
                    foreach ($monitorings as $old)
                        $old->delete();
                }
                foreach ($schedule->group->students as $student) {
                    $monitoring = new Monitoring();
                    $monitoring->schedule_id = $schedule->id;
                    $monitoring->student_id = $student->student->id;
                    $monitoring->created_by = \Auth::user()->id;
                    $monitoring->updated_by = \Auth::user()->id;
                    $monitoring->is_attended = 0;
                    $monitoring->save();
                }
                foreach ($input as $name => $name) {
                    if (is_numeric($name)) {
                        $monitoring = Monitoring::where('schedule_id', $schedule->id)->where('student_id', $name)->first();
                        $monitoring->is_attended = 1;
                        $monitoring->save();
                    }
                }
                $schedule->is_monitored = 1;
                if ($schedule->save())
                    return redirect()->route('monitoring.index');
            }
            else return view('noaccess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Group::where('id',$id)->exists())
        {
            if(\Auth::user()->role == 3)
            {
                $responsible = Teacher::where('user_id',\Auth::user()->id)->first();
                $data = Group::find($id);
                if($data->branch_id == $responsible->branch_id)
                {
                    return view('admin.pages.monitoring.show',[
                        'data'=>$data
                    ]);
                }
                else return view('norights');
            }
            if(\Auth::user()->role == 4)
            {
                $responsible = Moderator::where('user_id',\Auth::user()->id)->first();
                $data = Group::find($id);
                if($data->branch_id == $responsible->branch_id)
                {
                    return view('admin.pages.monitoring.show',[
                        'data'=>$data
                    ]);
                }
                else return view('norights');
            }
            if(\Auth::user()->role == 5)
            {
                $responsible = BranchAdmin::where('user_id',\Auth::user()->id)->first();
                $data = Group::find($id);
                if($data->branch_id == $responsible->branch_id)
                {
                    return view('admin.pages.monitoring.show',[
                        'data'=>$data
                    ]);
                }
                else return view('norights');
            }
            if(\Auth::user()->role == 6)
            {
                $responsible = Admin::where('user_id',\Auth::user()->id)->first();
                $data = Group::find($id);
                $region = $data->branch->region->id;
                if($region == $responsible->region_id)
                {
                    return view('admin.pages.monitoring.show',[
                        'data'=>$data
                    ]);
                }
                else return view('norights');
            }
            if(\Auth::user()->role == 6)
            {
                    $data = Group::find($id);
                    return view('admin.pages.monitoring.show',[
                        'data'=>$data
                    ]);
            }
            return view('norights');
        }
        else echo "Ma'lumot topilmadi";
        die();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function student($id)
    {
        return view('admin.pages.monitoring.student');
    }
    public function attendence($student, $schedule)
    {
        $lesson = Schedule::find($schedule);
        if((time()-strtotime($lesson->ending_date))<7200 && (strtotime($lesson->starting_date)<time())) {
            // this section allows to teacher to check if student attended in the class
            echo "success";
            die();
            if (Monitoring::where('student_id', $student)->where('schedule_id', $schedule)->exists()) {
                $monitoring = Monitoring::where('student_id', $student)->where('schedule_id', $schedule)->first();
                $monitoring->is_attended = ($monitoring->is_attended + 1) % 2;
                $monitoring->save();
                echo "success";
                die();
            }
            else {
                $monitoring = new Monitoring();
                $monitoring->student_id = $student;
                $monitoring->schedule_id = $schedule;
                $monitoring->is_attended = 1;
                $monitoring->created_by = \Auth::user()->id;
                $monitoring->updated_by = \Auth::user()->id;
                $monitoring->save();
                die();
            }
            //end of modifying
        }
        if((strtotime($lesson->starting_date)-time()<7200))
        echo '0';
    }
}
