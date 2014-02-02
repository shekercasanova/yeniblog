@extends('arkakapi.layout.master')
@section('content')
@section('baslik')
Sistem <span>Arkakapı Modüler İçerik Yönetim Sistemi</span>
@stop
@section('breadcrumbs')
<li>
    <a href="{{URL::to('arkakapi/panel')}}">Panel</a>
</li>
@stop

<div class="row-fluid">
    <div class="widget span12">
        <div class="widget-header">
            <span class="title">
                <i class="icon-comments"></i> Arkakapı Canlı Sohbet Sistemi v1.2
            </span>
            <div class="toolbar">
                <span class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </span>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#"><i class="icol-lightbulb"></i> Available</a></li>
                    <li><a href="#"><i class="icol-cross-shield-2"></i> Busy</a></li>
                    <li><a href="#"><i class="icol-clock"></i> Away</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icol-disconnect"></i> Disconnect</a></li>
                </ul>
            </div>
        </div>
        <div class="widget-content chat-box">
            <ul class="thumbnails">
                <li class="me">
                    <div class="thumbnail">
                        <img src="{{URL::to('assets/images/pp.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Shana-chan</span>
                        Hello everyone! Mind sharing your time with me today?
                        <span class="time">15 minutes ago</span>
                    </div>
                </li>
                <li class="others">
                    <div class="thumbnail">
                        <img src="{{URL::to('sample/p2.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Jane Well</span>
                        Hello dear, do you have something in your mind to discuss with us?
                        <span class="time">14 minutes ago</span>
                    </div>
                </li>
                <li class="me">
                    <div class="thumbnail">
                        <img src="{{URL::to('assets/images/pp.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Shana-chan</span>
                        Cras convallis, odio in ultricies condimentum, dui metus pretium orci, ac sagittis orci eros a leo. Cras lorem est, suscipit quis lacinia sit amet, tempor a tortor. Fusce in vehicula purus. Quisque ut suscipit elit. Fusce ac metus in enim euismod tincidunt. Nunc blandit neque vitae sem egestas id egestas neque bibendum. Etiam eget risus ut dolor convallis consectetur.
                        <span class="time">10 minutes ago</span>
                    </div>
                </li>
                <li class="others">
                    <div class="thumbnail">
                        <img src="{{URL::to('sample/p1.jpg')}}" alt="">
                    </div>
                    <div class="message">
                        <span class="name">Jonathan Doe</span>
                        Wow, that's a long sentence. I don't quite understand what you mean, but it's good overall :)
                        <span class="time">Just now</span>
                    </div>
                </li>
            </ul>
            <div class="message-form">
                <div class="row-fluid">
                    <div class="span10">
                        <input type="text" class="span12" placeholder="Type a message...">
                    </div>
                    <div class="span2">
                        <button type="button" class="btn btn-block btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
<!-- Bu Viewe Ait Css Dosyaları -->

@stop


@section('js')
<!-- Bu Viewe Ait Js Dosyaları -->

@stop