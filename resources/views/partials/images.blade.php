<div class="form-group text-center">
    <label class="form-control-label" for="input-name">{{ $image['label'] }}</label>
    @isset($image['help'])
       <br /> <span class="small">{{ $image['help'] }}</span>
    @endisset
    <div class="text-center">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="{{ $image['style'] }}"> 
                <img src="{{ $image['value'] }}" alt="..."/> 
              
        </div>
            <div>
                <span class="btn btn-outline-secondary btn-file">
                <span class="fileinput-new" >{{ __('Select image') }}</span>
                <span class="fileinput-exists">{{ __('Change') }}</span>
                
               
                <input type="file" name="{{ $image['name'] }}" id="input_file" onchange="previewFile(this)" accept="image/x-png,image/gif,image/jpeg">
                <!-- <img id="img_preview" src="#" alt="your image" style="display:none" /> -->
                </span>
                <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput" >{{ __('Remove') }}</a>
            </div>
        </div>
    </div>
</div>
