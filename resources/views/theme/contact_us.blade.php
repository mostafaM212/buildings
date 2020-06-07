@extends('layouts.app')

@section('title')
    أتصل بنا
@endsection


@section('content')


    <div class="about">
        <div class="container">
            <section class="title-section">
                <h1 class="title-header text-right">تواصل معنا</h1>
            </section>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row contact_top">
                <div class="col-md-4 contact_details">
                    <h5>العنوان ابريدى الخاص بنا:</h5>
                    <div class="contact_address">{{getSetting('address')}}</div>
                </div>
                <div class="col-md-4 contact_details">
                    <h5>تواصل معنا على هذا الرقم</h5>
                    <div class="contact_address"> +2 {{getSetting('Mobile')}}<br>
                    </div>
                </div>
                <div class="col-md-4 contact_details">
                    <h5>الايميل الرسمى</h5>
                    <div class="contact_mail"> {{getSetting('Facebook')}}</div>
                </div>
            </div>
            <div class="contact_bottom">
                <h3>شاركنا برأيك</h3>
                <p>سلام ياتاج الرُجوله والوفاء ياصانع المعروف في الوقت الحرج اسعد مساك بالخير ياكاس الهناء ياكوكب المريخ ويا نجم السماء .</p>
                <form method="post" action="{{route('contact.store')}}">
                    @csrf
                    <label for="name">الأسم:</label>
                    <input type="text" class="text col-4" name="name" style="border-radius: 10px" placeholder="أدخل أسمك">


                        <label for="email" style="margin-right: 120px">الايميل:</label>
                        <input type="email" class="text col-4" name="email" style="border-radius: 10px" placeholder="أدخل إيميل لديك">


                    <div>
                        <h1></h1>
                    </div>
                    <label for="email">العنوان:</label>
                    <select name="address" class="select2-container col-10" style="border-radius: 10px">
                        @foreach(contact() as $key=>$place)
                            <option name="address" value="{{$key}}">{{$place}}</option>
                        @endforeach
                    </select>
                    <br>
                    <div class="text2 row">
                        <label for="massage">رساله:</label>
                        <textarea name="massage" style="margin-right: 20px" class="col-10" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">شاركنا برايك</textarea>
                    </div>
                    <div> <button type="submit"  class="submit">ارسل الرساله</button> </div>
                </form>
            </div>
        </div>
    </div>

@endsection
