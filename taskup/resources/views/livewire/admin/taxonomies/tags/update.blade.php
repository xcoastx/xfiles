<div class="col-lg-4 col-md-12 tb-md-40">
    <div class="tb-dbholder tb-packege-setting">
        <div class="tb-dbbox tb-dbboxtitle">
            @if($editMode)
                <h5> {{ __('taxonomy.update_tag') }}</h5>
            @else 
                <h5> {{ __('taxonomy.add_tag') }}</h5>
            @endif
        </div>
        <div class="tb-dbbox">
            <form class="tk-themeform">
                <fieldset>
                    <div class="tk-themeform__wrap">
                        <div class="form-group">
                            <label class="tb-label">{{ __('general.name') }}</label>
                            <input type="text" class="form-control @error('name') tk-invalid @enderror"  wire:model.defer="name" required placeholder="{{ __('general.name') }}">
                            @error('name')
                                <div class="tk-errormsg">  
                                    <span>{{ $message }}</span> 
                                </div>
                            @enderror
                        </div>
                        @if($editMode)
                            <div class="form-group">
                                <label class="tb-label">{{ __('general.status') }}:</label>
                                <div class="tb-email-status">
                                    <span>{{__('general.status')}}</span>
                                    <div class="tb-switchbtn">
                                        <label for="tb-emailstatus" class="tb-textdes"><span id="tb-textdes">{{ $status == 'active' ? __('general.active') : __('general.deactive') }}</span></label>
                                        <input class="tb-checkaction" {{ $status == 'active' ? 'checked' : '' }} type="checkbox" id="tb-emailstatus">
                                    </div>
                                </div>
                                @error('status')
                                    <div class="tk-errormsg">
                                        <span>{{ $message }}</span> 
                                    </div>
                                @enderror
                            </div>
                        @endif
                        <div class="form-group tb-dbtnarea">
                            <a href="javascript:void(0);" wire:click.prevent="update" class="tb-btn"> 
                                @if($editMode) 
                                    {{ __('taxonomy.update_tag') }}
                                @else
                                    {{ __('taxonomy.add_now') }}
                                @endif
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>