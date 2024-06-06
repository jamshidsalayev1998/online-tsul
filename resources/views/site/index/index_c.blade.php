@extends('layouts.site')
@section('content')
    <?php
    ?>
    <style>
        p{
            font-size: 14px;
            text-align: justify;
        }
    </style>
    <div class="row" style="background: white;margin-top:10px;">
        <div style="padding: 50px;height:250px;background: #4169e1 ">
            <div class="col-md-3" style="padding: 10px;">
                <center>
                    <img src="/photos/logo.png" style="max-height: 180px;">
                </center>
            </div>
            @if(App::isLocale('uz'))
                <div class="col-md-9">
                    <div style="margin: auto;width: 90%;margin-top: 10px;">
                        <div style="height: 30px;"></div>
                        <strong style="color: whitesmoke;font-size: 20px;text-align: center;text-transform: uppercase">@lang('main.header2')</strong>
                    </div>
                    <div style="margin-top: 40px;">
                        <h1 style="margin-left: 50px;color: white;font-size: 50px;text-transform: uppercase">@lang('main.header1')</h1>
                    </div>
                </div>
            @endif
            @if(App::isLocale('ru') | App::isLocale('en'))
                <div class="col-md-9">
                    <div style="margin-top: 20px;">
                        <h1 style="margin-left: 50px;color: white;font-size: 50px;text-transform: uppercase">@lang('main.header1')</h1>
                    </div>
                    <div style="margin: auto;width: 90%;margin-top: 50px;">
                        <div style="height: 30px;"></div>
                        <strong style="color: whitesmoke;font-size: 20px;text-align: center;text-transform: uppercase">@lang('main.header2')</strong>
                    </div>
                </div>
            @endif        <div class="col-md-12 padding-30">
                @if(App::isLocale('uz'))
                    <h3 style="font-weight: bold">Hurmatli abituriyentlar (Bakalavriat)!</h3>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sizga Toshkent davlat yuridik universiteti bakalavriatiga qabul qilish to‘g‘risidagi arizangizni elektron shaklda yuborish imkoniyati taqdim etilmoqda. Shu bilan birga, Sizning yuborayotgan arizangiz rasmiy maqomga ega ekanligini ham eslatib o‘tamiz.      Shu bois, Sizdan quyidagilarga e’tibor berishingiz so‘raladi:
                        arizangizda familiyangiz, ismingiz, otangizning ismi, pasport bo‘yicha doimiy yashash joyingiz, telefon raqamingiz, tamomlagan maktabingiz, litseyingiz, kollejingiz nomi, manzili va bitirgan yilingiz, diplom seriyasi va raqami (imtiyozli bo‘lsa ko‘rsating), hujjat topshirmoqchi bo‘lgan mutaxassisligingiz nomi, ta’lim tili, qaysi xorijiy tilni o‘rganganligingiz, pasport ma’lumotlaringiz, jinsingiz, tug‘ilgan sana va joyingiz, millatingiz, o‘qishga kirishdan oldin bajarayotgan ishingiz va umumiy ish stajingiz, ota-onangiz haqidagi hamda o‘zingiz haqidagi qo‘shimcha ma’lumotlarni kiritishingiz, shuningdek imtihon o‘tkazish tartibi bilan tanishganlik to‘g‘risida belgi qo‘yishingiz lozim;      barcha hujjatlar belgilangan talablarga muvofiq taqdim etilgan taqdirda, 72 soat ichida noyob raqam berish orqali Sizning arizangiz ro‘yxatga olinadi va bu haqda bildirishnoma yuboriladi.Shuningdek, Sizga arizani yuborganingizdan keyin 72 soat ichida quyidagi holatlarda uni ro‘yxatga olish rad etilishi mumkinligini eslatib o‘tiladi: ariza mazmunidagi ma’lumotlar noto‘g‘ri bo‘lganida;
                        arizaga ilova qilingan hujjatlar sifati, mazmuni va texnik ko‘rsatkichlari o‘rnatilgan talablarga javob bermagan taqdirda;
                        diplom bo‘yicha mutaxassisligingiz to‘g‘ri kelmaganda.</p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Arizani ro‘yxatga olish rad etilgan taqdirda arizada ko‘rsatilgan elektron pochta manzili bo‘yicha Sizga tegishli xabarnoma jo‘natiladi.      Mazkur shartlarning barchasi O‘zbekiston Respublikasining qonun hujjatlaridan kelib chiqqan holda belgilangan.
                    </p>
                @endif

                @if(App::isLocale('ru'))
                    <h3 style="font-weight: bold">Уважаемые абитуриенты бакалавриата !</h3>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Теперь Вы можете отправить заявление о приеме документов в бакалавриат Ташкентского государственного юридического университета в электронной форме. Хотим напомнить, что отправленное Вами заявление носит официальный характер.       В этой связи просим Вас указать в заявлении:
                        фамилию, имя, отчество полностью; сведения о постоянном месте жительства, номер телефона; название, адрес и дату окончания школы, лицея, колледжа; серию и номер диплома (если диплом с отличием - указать); наименование выбранной специальности; язык обучения;     в случае предоставления всех необходимых документов в соответствии с установленными требованиями, в течение 72 часов Ваше заявление регистрируется с присвоением ему соответствующего номера, далее на Вашу электронную почту будет отправлено сообщение о представлении оригиналов документов в установленные сроки.Также хотим напомнить, что Вам могут отказать в регистрации заявления в течение 72 часов после его подачи на следующих основаниях:  если в заявлении даны неверные сведения;
                        если документы, прилагаемые к заявлению, по качеству, содержанию и техническим параметрам не отвечают установленным требованиям;
                        если выбранная специальность не соответствует диплому.</p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В случае отказа в регистрации заявления Вам направляется соответствующее оповещение по указанному Вами адресу электронной почты .      Данные требования установлены в соответствие с действующим законодательством Республики Узбекистан.
                    </p>
                @endif

                @if(App::isLocale('en'))
                    <h3 style="font-weight: bold">DEAR STUDENTS TO THE Bachelor's Degree! </h3>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YYou are given the opportunity to send an application in electronic form for admission to the bachelor of Tashkent State University of Law. We would like to remind you that the application you send is official.      In this regard, note the following: in the application you should indicate the last name, first name, middle name, information about the permanent place of residence, phone number, name, address and graduation date of the school, lyceum, college , serial number of the diploma (if you graduated with honors – please indicate), the name of the specialty you are applying for documents, language of instruction, what foreign languages do you speak, passport data, gender, date and place of birth, nationality, information about the activity before admission to study and general work experience, about oneself and parents, and also to put a mark about familiarization with the order of the examination;      if all necessary documents are submitted in accordance with the established requirements your application will be registered within 72 hours by assigning a unique number to it and you will be informed by e-mail about the need to present the originals of documents on time.Also we want to remind you that you can be refused to register an application within 72 hours after it was filed on the following grounds: in case of incorrectness of the information contained in the application;
                        if the documents attached to the application for quality, content and technical parameters do not meet the requirements;
                        if the speciality of diploma does not correspond to the direction.</p>
                    <p>
                        In case of refusal of registering your application, an appropriate notification will be sent to the e-mail address indicated in the application.      These requirements are established based on the legislation of the Republic of Uzbekistan.
                    </p>
                @endif
                <br>
                <br>
                <br>
                <center>
                    <div class="app-checkbox inline">
                        {{--                        <label style="font-weight: bold"><input type="checkbox" id="agree1" name="app-checkbox-1">@lang('main.agree')<span></span></label>--}}
                        {{--                        <label style="font-weight: bold"><input type="checkbox" id="agree2" name="app-checkbox-2">@lang('main.agree')<span></span></label>--}}
                    </div>
                    <div class="app-checkbox inline">
                        {{--                        <label style="font-weight: bold"><input type="checkbox" id="agree1" name="app-checkbox-1">@lang('main.agree')<span></span></label>--}}
                        {{--                        <label style="font-weight: bold"><input type="checkbox" id="agree1" name="app-checkbox-2">@lang('main.agree')<span></span></label>--}}
                    </div>
                    <div>
                        {{--                        <button class="btn btn-success" data-toggle="modal" data-target="#select-one" style="width: 100%;text-transform: uppercase;display: none" id="startbutton2">@lang('main.start_app')</button>--}}
                        <button class="btn btn-success" data-toggle="modal" data-target="#select-two" style="width: 100%;text-transform: uppercase;display: block" id="startbutton2">@lang('main.masters_start')</button>
                    </div>
                    <div>
                        <button class="btn btn-success" data-toggle="modal" data-target="#select-one" style="width: 100%;text-transform: uppercase;display: block" id="startbutton1">@lang('main.overseas_start')</button>
                        {{--                        <button class="btn btn-success" data-toggle="modal" data-target="#select-two" style="width: 100%;text-transform: uppercase;display: none" id="startbutton2">@lang('main.start_app')</button>--}}
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="modal fade" id="select-one" tabindex="-1" role="dialog" aria-labelledby="modal-large-header" >
        <div class="modal-dialog modal-lg" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

            <div class="modal-content">
                <div class="modal-header">
                    <p>@lang('main.select')</p>
                </div>
                <div class="modal-body">
                    <div class="block-content">
                        <div style="padding: 15px;">
                            <a href="{{ route('overseas') }}" class="btn btn-default" style="width: 100%;text-transform: uppercase">@lang('main.overseas_start')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="select-two" tabindex="-1" role="dialog" aria-labelledby="modal-large-header" >
        <div class="modal-dialog modal-lg" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

            <div class="modal-content">
                <div class="modal-header">
                    <p>@lang('main.select')</p>
                </div>
                <div class="modal-body">
                    <div class="block-content">
                        <div style="padding: 15px;">
                            <a href="{{ route('masters') }}" class="btn btn-default" style="width: 100%;">@lang('main.masters_start')</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
