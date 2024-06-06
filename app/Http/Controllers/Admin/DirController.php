<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Test\Http\Controllers\Controller;
use Test\Model\Overseas;
use Test\Model\Masters;
use Illuminate\Support\Facades\File;
use Mail;
use Test\Model\Spec;
use Test\Model\StudyLanguage;
use Test\Model\DirLang;

class DirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = StudyLanguage::query()->get();
        $spec = Spec::query()->with('langs')->get();
        return view('admin.pages.overseas_dir.index',compact('langs', 'spec'));
    }
    public function create()
    {

    }
    public function show($id)
    {
        if(Overseas::where('id',$id)->exists())
        {
            $data = Overseas::find($id);
            return view('admin.pages.overseas.show',[
                'data'=>$data
            ]);
        }
        else echo "Ma'lumot topilmadi";
    }
    public function edit($id)
    {
        $data = Masters::find(46);
//        $a = (new SubmitController())->overseaspdf($id);
//        $data->application_name = $a;
//        $data->update();
        return view('site.submit.masterspdf',['data'=>$data]);
    }
    public function destroy($id)
    {
        $data = Overseas::find($id);
        if(file_exists(public_path($data->passport_copy)))
            File::delete(public_path($data->passport_copy));

        if(file_exists(public_path($data->image)))
            File::delete(public_path($data->image));

        if(file_exists(public_path($data->back_cert_copy)))
            File::delete(public_path($data->back_cert_copy));

        if(file_exists(public_path($data->h_educ_diplom_copy)))
            File::delete(public_path($data->h_educ_diplom_copy));

        if(file_exists(public_path($data->application_name)))
            File::delete(public_path($data->application_name));
        if($data->delete())
        {
            return redirect()->route('overseas.index')->with('message','Ma\'lumot yo\'q qilindi.');
        }
    }
    public function confirm(Request $request)
    {
        $input = $request->all();
        $student_id =  $input['student_id'];
        $app_id = $input['application_id'];
        $person = Overseas::find($app_id);
        $person->student_id = $student_id;
        $person->status = 1;
        if($person->save())
        {
            $id = $person->id;
            $lang = "uz";
            // $this->mailer($id,$lang);
            return redirect()->route('overseas.show',['id'=>$app_id])->with('message','Unikal raqam berildi!');
        }

    }
    public function mailer($id,$lang)
    {
        $applicant = Overseas::find($id);
        $subject = 'Dear Applicant';
        $data = [
            'email' => $applicant->email,
            'subject' => $subject,
            'bodyMessage' => 'Here body message',
            'data'=>$applicant,
        ];
        Mail::send('admin.pages.overseas.mailer', $data, function ($message) use ($data) {
            $message->from('tsul.admission@gmail.com', 'Tsul Admission');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
        // end sening email
    }
    public function mailto(Request $request)
    {
        $input = $request->all();
        $applicant_id = $input['applicant_id'];
        $content = $input['content'];
        $data = $content;
        $applicant = Overseas::find($applicant_id);
        $data = [
            'email' => $applicant->email,
            'subject' => "Dear Applicant",
            'bodyMessage' => 'Here body message',
            'data'=>$data,
        ];
        Mail::send('admin.pages.overseas.mailto', $data, function ($message) use ($data) {
            $message->from('admission2023@tsul.uz', 'Tsul Admission');
            $message->to($data['email'])
//             $message->to('azizbekkamolov19zvsvsdfvd@gmail.com')
                ->subject($data['subject']);
        });
//         dd(1);
        return redirect()->route('overseas.show',['id'=>$applicant_id])->with('message','Xabar muvaffaqiyatli yuborildi!');
    }

    public function get_dir_lang($id)
    {
        return $id;
    }

}
