@extends('layouts.site')
@section('content')
<?php
    ?>
<style>
    p {
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
                    <strong
                        style="color: whitesmoke;font-size: 20px;text-align: center;text-transform: uppercase">@lang('main.header2')</strong>
                </div>
                <div style="margin-top: 40px;">
                    <h1 style="margin-left: 50px;color: white;font-size: 50px;text-transform: uppercase">
                        @lang('main.header1')</h1>
                </div>
            </div>
        @endif
        @if(App::isLocale('ru') | App::isLocale('en'))
            <div class="col-md-9">
                <div style="margin-top: 20px;">
                    <h1 style="margin-left: 50px;color: white;font-size: 50px;text-transform: uppercase">
                        @lang('main.header1')</h1>
                </div>
                <div style="margin: auto;width: 90%;margin-top: 50px;">
                    <div style="height: 30px;"></div>
                    <strong
                        style="color: whitesmoke;font-size: 20px;text-align: center;text-transform: uppercase">@lang('main.header2')</strong>
                </div>
            </div>
        @endif

    </div>

    <div class="col-md-6 padding-30">
        @if(App::isLocale('uz'))
            <h3 style="font-weight: bold">Hurmatli xorijiy fuqarolar (BAKALAVRIAT)!</h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ushbu platforma orqali Sizda Toshkent davlat yuridik
                universiteti bakalavriatiga qabul qilish to‘g‘risidagi arizangizni elektron shaklda yuborish
                imkoniyati mavjud.</p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Siz yuborayotgan ushbu ariza rasmiy maqomga ega ekanligini va ariza
                to‘ldirayotgan vaqtda barcha
                ma’lumotlarni to‘g‘ri kiritishingiz kerakligini eslatib o‘tamiz.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Barcha hujjatlar belgilangan talablarga muvofiq taqdim etilgan taqdirda, 72
                soat ichida noyob raqam berish orqali Sizning arizangiz ro‘yxatga olinadi va bu haqda arizada ko‘rsatilgan
                elektron pochta manzili orqali Sizga bildirishnoma yuboriladi.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Arizani ro‘yxatga olish rad etilgan taqdirda, arizada ko‘rsatilgan
                elektron pochta manzili bo‘yicha
                Sizga tegishli xabarnoma jo‘natiladi.
            </p>
            <p>
                Quyidagi holatlar arizani rad etilish uchun asos bo‘ladi:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) ariza mazmunidagi ma’lumotlar noto‘g‘ri bo‘lganida;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2) arizaga ilova qilingan hujjatlar sifati, mazmuni va texnik
                ko‘rsatkichlari o‘rnatilgan talablarga
                javob bermagan taqdirda.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ariza qabul qilingan taqdirda, Toshkent davlat yuridik universiteti
                bakalavriatiga xorijiy
                fuqarolarni qabul qilish suhbat asosida amalga oshiriladi. Suhbatda xorijiy fuqarolarning dunyoqarashi,
                ularning huquqshunoslik kasbiga layoqati va motivatsiyasi hamda umumiy intellektual va ma’naviy-axloqiy
                darajasiga e’tibor qaratiladi.
            </p>
        @endif

        @if(App::isLocale('ru'))
            <h3 style="font-weight: bold">Уважаемые иностранные граждане (БАКАЛАВРИАТ)!</h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Через данную платформу Вы сможете в электронном виде отправить
                заявление на прием в бакалавриат Ташкентского государственного юридического университета.
            </p>

            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Напоминаем, что заявление, которую Вы отправляете, имеет официальный
                статус и при его заполнении Вы должны правильно ввести всю необходимую информацию.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; В случае предоставления всех необходимых документов в соответствии с
                установленными требованиями, в течение 72 часов Ваше заявление регистрируется с присвоением ему
                соответствующего номера. Об этом на Вашу электронную почту будет отправлено уведомление.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; В случае отказа в регистрации заявления, Вам будет направлено
                соответствующее уведомление на адрес электронной почты, указанный в заявлении.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Основаниями для отказа заявления являются следующие:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) в содержании заявления имеются неверные сведения;
            </p>
            <p>
                &nbsp; 2) документы, прилагаемые к заявлению, по качеству, содержанию и
                техническим параметрам не отвечают установленным требованиям.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; В случае принятия заявления, прием иностранных граждан в бакалавриат
                Ташкентского государственного юридического университета будет осуществлен на основе собеседования.
                В собеседовании будет обращено внимание на мировоззрение иностранных граждан, их компетенцию и мотивацию к
                юридической профессии, а также на общий интеллектуальный и духовно-нравственный уровень кандидатов.
            </p>
        @endif

        @if(App::isLocale('en'))
            <h3 style="font-weight: bold">DEAR FOREIGN CITIZENS (Bachelor Degree)! </h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Through this platform, you can electronically send an application for
                admission to the Bachelor degree of the Tashkent State University of Law.</p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We remind you that the application you are sending has an official
                status, while filling it out you must enter correctly all the required information
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If all the necessary documents are provided in accordance with the
                established requirements, within 72 hours your application is registered with the assignment of an
                special number to it. A notification about this will be sent to your e-mail, specified in the
                application.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In case of refusal to register the application, a notification about this
                will be sent to your e-mail, specified in the application.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The followings are reasons for rejecting an application:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) there is incorrect information in the content of the application;
            </p>
            <p>
                &nbsp; 2) the documents attached to the application do not meet the
                established requirements in terms of quality, content and technical parameters.
            </p>


            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In the interview, focus will be paid to worldview of foreign citizens, their
                competence and motivation for the legal profession, as well as the general intellectual, spiritual and moral
                level of the candidates.
            </p>
        @endif

    </div>
    <div class="col-md-6 padding-30">
        @if(App::isLocale('uz'))
            <h3 style="font-weight: bold">Hurmatli xorijiy fuqarolar (MAGISTRATURA)!</h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ushbu platforma orqali Sizda Toshkent davlat yuridik
                universiteti magistraturasiga qabul qilish to‘g‘risidagi arizangizni elektron shaklda yuborish
                imkoniyati mavjud.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Siz yuborayotgan ushbu ariza rasmiy maqomga ega ekanligini va ariza
                to‘ldirayotgan vaqtda barcha ma’lumotlarni to‘g‘ri kiritishingiz kerakligini eslatib o‘tamiz.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Barcha hujjatlar belgilangan talablarga muvofiq taqdim etilgan taqdirda, 72
                soat ichida noyob raqam berish orqali Sizning arizangiz ro‘yxatga olinadi va bu haqda arizada ko‘rsatilgan
                elektron pochta manzili orqali Sizga bildirishnoma yuboriladi.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Arizani ro‘yxatga olish rad etilgan taqdirda, arizada ko‘rsatilgan
                elektron pochta manzili bo‘yicha Sizga tegishli xabarnoma jo‘natiladi.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quyidagi holatlar arizani rad etilish uchun asos bo‘ladi:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) ariza mazmunidagi ma’lumotlar noto‘g‘ri bo‘lganida;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2) arizaga ilova qilingan hujjatlar sifati, mazmuni va texnik
                ko‘rsatkichlari o‘rnatilgan talablarga javob bermagan taqdirda;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) bakalavriat bo‘yicha diplom tanlangan mutaxassisligingizga to‘g‘ri
                kelmaganda.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ariza qabul qilingan taqdirda, Toshkent davlat yuridik universiteti
                magistraturasiga xorijiy fuqarolarni qabul qilish suhbat asosida amalga oshiriladi.
                Suhbat:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yurisprudensiya sohasida professional bilim va ko‘nikmalarini;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ilmiy tadqiqot olib borishga bo‘lgan qobiliyatni;
            </p>

            <p>
                &nbsp;&nbsp;&nbsp;salohiyat darajasini (bilim va uquvni takomillashtirish, muammolarni
                hal qilishga noan’anaviy yondashuvi;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; odob-axloq qoidalari va prinsiplarini aniqlash uchun o‘tkaziladi.
            </p>

        @endif

        @if(App::isLocale('ru'))
            <h3 style="font-weight: bold">Уважаемые иностранные граждане (МАГИСТРАТУРА)!</h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Через данную платформу Вы сможете в электронном виде отправить
                заявление на прием в магистратуру Ташкентского государственного юридического университета.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Напоминаем, что заявление, которую Вы отправляете, имеет официальный
                статус и при его заполнении Вы должны правильно ввести всю необходимую информацию.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; В случае предоставления всех необходимых документов в соответствии с
                установленными требованиями, в течение 72 часов Ваше заявление регистрируется с присвоением ему
                соответствующего номера. Об этом на Вашу электронную почту будет отправлено уведомление.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; В случае отказа в регистрации заявления, Вам будет направлено
                соответствующее уведомление на адрес электронной почты, указанный в заявлении.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Основаниями для отказа заявления являются следующие:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) в содержании заявления имеются неверные сведения;
            </p>
            <p>
                &nbsp; 2) документы, прилагаемые к заявлению, по качеству, содержанию и
                техническим параметрам не отвечают установленным требованиям;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) выбранная специальность не соответствует диплому бакалавриата.

            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; В случае принятия заявления, прием иностранных граждан в магистратуру
                Ташкентского государственного юридического университета будет осуществлен на основе собеседования.
            </p>
            <p>
                Собеседование проводится с целью определения:
                профессиональных знаний и навыков в области юриспруденции; способности к проведению научных исследований;
                уровня потенциала (способность к совершенствованию знаний и обучению, нестандартный подход к решению задач;
                правил и принципов этики абитуриента.
            </p>

        @endif

        @if(App::isLocale('en'))
            <h3 style="font-weight: bold">DEAR FOREIGN CITIZENS (Master's Degree)! </h3>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Through this platform, you can electronically send an application for
                admission to the master's degree of the Tashkent State University of Law.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We remind you that the application you are sending has an official
                status, while filling it out you must enter correctly all the required information
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If all the necessary documents are provided in accordance with the
                established requirements, within 72 hours your application is registered with the assignment of an
                special number to it. A notification about this will be sent to your e-mail, specified in the
                application.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In case of refusal to register the application, a notification about this will be sent to your e-mail, specified in the application.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The followings are reasons for rejecting an application:
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1) there is incorrect information in the content of the application;
            </p>
            <p>
                &nbsp; 2) the documents attached to the application do not meet the
                established requirements in terms of quality, content and technical parameters;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3) if the chosen specialty does not match to the bachelor diploma.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In case of acceptance of the application, the admission of foreign
                citizens to the master's program of the Tashkent State University of Law will be carried out on the
                basis of an interview.
                An interview held to determine:

            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; professional knowledge and skills in the field of jurisprudence;
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the ability to conduct scientific research;
            </p>
            <p>
                &nbsp; the level of potential (the ability to improve knowledge and
                learning, an unconventional approach to solving problems);
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the rules and principles of ethics.
            </p>

        @endif


    </div>
    <div class="col-md-12">
        <div class="row padding-bottom-20">
            <div class="col-md-6">
                <center>
                    <div class="app-checkbox inline">
                        <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                name="app-checkbox-1">@lang('main.agree')
                            <span></span></label>
                        {{-- <label style="font-weight: bold"><input type="checkbox" id="agree2"
                                name="app-checkbox-2">@lang('main.agree')<span></span></label>--}}
                    </div>
                    <div class="app-checkbox inline">
                        {{-- <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                name="app-checkbox-1">@lang('main.agree')<span></span></label>--}}
                        {{-- <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                name="app-checkbox-2">@lang('main.agree')<span></span></label>--}}
                    </div>
                    <div>
                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-one"
                            style="width: 100%;text-transform: uppercase;display: none"
                            id="startbutton2">@lang('main.start_app')</button>--}}

                        <a href="{{ route('overseas') }}" class="btn btn-success"
                            style="width: 100%;text-transform: uppercase;display: none"
                            id="startbutton1">@lang('main.overseas_start')</a>
                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-one" --}} {{--
                            style="width: 100%;text-transform: uppercase;display: none" --}} {{--
                            id="startbutton1">@lang('main.overseas_start')</button>--}}
                    </div>
                    {{-- <div>--}}
                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-one" --}} {{--
                            style="width: 100%;text-transform: uppercase;display: block" --}} {{--
                            id="startbutton1">@lang('main.overseas_start')</button>--}}
                        {{-- --}}{{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-two"
                            style="width: 100%;text-transform: uppercase;display: none"
                            id="startbutton2">@lang('main.start_app')</button>--}}
                        {{-- </div>--}}
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <div class="app-checkbox inline">
                        {{-- <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                name="app-checkbox-1">@lang('main.agree')<span></span></label>--}}
                        <label style="font-weight: bold"><input type="checkbox" id="agree2"
                                name="app-checkbox-2">@lang('main.agree')
                            <span></span></label>
                    </div>
                    <div class="app-checkbox inline">
                        {{-- <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                name="app-checkbox-1">@lang('main.agree')<span></span></label>--}}
                        {{-- <label style="font-weight: bold"><input type="checkbox" id="agree1"
                                name="app-checkbox-2">@lang('main.agree')<span></span></label>--}}
                    </div>
                    {{-- <div>--}}
                        {{-- --}}{{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-one"
                            style="width: 100%;text-transform: uppercase;display: none"
                            id="startbutton2">@lang('main.start_app')</button>--}}
                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-two" --}} {{--
                            style="width: 100%;text-transform: uppercase;display: block" --}} {{--
                            id="startbutton2">@lang('main.masters_start')</button>--}}
                        {{-- </div>--}}
                    <div>
                        <a href="{{ route('masters') }}" class="btn btn-success"
                            style="width: 100%;text-transform: uppercase;display: none"
                            id="startbutton2">@lang('main.masters_start')</a>
                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-two" --}} {{--
                            style="width: 100%;text-transform: uppercase;display: none" --}} {{--
                            id="startbutton2">@lang('main.masters_start')</button>--}}

                        {{-- <button class="btn btn-success" data-toggle="modal" data-target="#select-two"
                            style="width: 100%;text-transform: uppercase;display: none"
                            id="startbutton2">@lang('main.start_app')</button>--}}
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="select-one" tabindex="-1" role="dialog" aria-labelledby="modal-large-header">
    <div class="modal-dialog modal-lg" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                class="icon-cross"></span>
        </button>

        <div class="modal-content">
            <div class="modal-header">
                <p>@lang('main.select')</p>
            </div>
            <div class="modal-body">
                <div class="block-content">
                    <div style="padding: 15px;">
                        <a href="{{ route('overseas') }}" class="btn btn-default"
                            style="width: 100%;text-transform: uppercase">@lang('main.overseas_start')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="select-two" tabindex="-1" role="dialog" aria-labelledby="modal-large-header">
    <div class="modal-dialog modal-lg" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
                class="icon-cross"></span>
        </button>

        <div class="modal-content">
            <div class="modal-header">
                <p>@lang('main.select')</p>
            </div>
            <div class="modal-body">
                <div class="block-content">
                    <div style="padding: 15px;">
                        <a href="{{ route('masters') }}" class="btn btn-default"
                            style="width: 100%;">@lang('main.masters_start')</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
