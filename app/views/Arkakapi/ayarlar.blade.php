@extends('arkakapi.layout.master')
@section('content')
@section('baslik')
Ayarlar <span>Bu Kısımdan Sistem Ayarlarınızı Değiştirebilirsiniz.</span>
@stop
@section('breadcrumbs')
<li>
    <a href="{{URL::to('arkakapi/panel')}}">Panel</a>
</li>
<span class="divider">&raquo;</span>
<li>
    <a href="{{URL::to('arkakapi/panel/ayarlar')}}">Ayarlar</a>
</li>
@stop
<div class="row-fluid">
    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <span class="title"><i class="icon-bended-arrow-right"></i> Gelir Ekleyin</span>
            </div>
            <div class="widget-content form-container">
                <form id="gelir" class="form-horizontal autoValidate" method="post" enctype="multipart/form-data" action="">
                    <div class="control-group">
                        <label class="control-label" for="baslik">Başlık <span class="required">*</span></label>
                        <div class="controls">
                            <input name="islem_adi" type="text" id="baslik"  class="span12" required >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="datepicker">Tarih <span class="required">*</span></label>
                        <div class="controls">
                            <input name="islem_tarih" type="text" id="datepicker" class="span12 datepicker">
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="gelirmiktar">Gelir <span class="required">*</span></label>
                        <div class="controls">
                            <div class="input-append">
                                <input class="numeric" name="islem_miktar" type="text" id="gelirmiktar" required><span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>




                    <div class="control-group">
                        <label class="control-label" for="input02">Gelir Açıklaması</label>
                        <div class="controls">
                            <textarea name="islem_aciklama" id="input02" class="span12 cleditor"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input04">Gelir Dosyaları</label>
                        <div class="controls">
                            <input name="islem_dosya" type="file" id="input04" data-provide="fileinput">
                                <p class="help-block"><code>Eğer var ise gelirinize ait dosya ekleyebilirsiniz.[İzin Verilen Dosya Türleri : docx,pdf,doc,xls,xlsx]</code></p>
                        </div>
                    </div>
                    <div class="form-actions">

                        <button type="submit" class="btn btn-primary">Kaydet</button>
                        <button type="reset" class="btn" type="reset">İptal Et</button>
                        <div class="ajaxload pull-right"><img id="ajaxLoader" src="{{asset('assets/images/preloaders/5.gif')}}" alt=""></div>


                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

@stop
@section('css')
<!-- Bu Viewe Ait Css Dosyaları -->
{{HTML::style('plugins/select2/select2.css')}}




@stop


@section('js')
<!-- Bu Viewe Ait Js Dosyaları -->
{{HTML::script('plugins/select2/select2.min.js')}}
{{HTML::script('custom-plugins/bootstrap-fileinput.min.js')}}


@stop