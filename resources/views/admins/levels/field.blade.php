
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label @error('level_name') is-invalid @enderror" for="lavel_name">{{__('Level name')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="lavel_name" name="level_name" placeholder="{{__('Enter Level Name')}}.." value="{{isset($level) ? $level->name :old('level_name')}}"> 
                        </div>
                        @error('level_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label class="col-md-2 col-form-label @error('level_status') is-invalid @enderror" for="level_status">{{__('Level Status')}}<span class="text-danger">*</span></label>
                        <div class="col-lg-4">
                            <select name="level_status" id="level_status" class="form-control">
                                @foreach (Helper::getStatus() as $key => $status )

                                <option value="{{$key}}"  {{ isset($level) ? Helper::getSelectedValue($key, $level->status ): ''}} > {{$status}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        @error('level_status')
                        <span class="invalid-feedback" role="alert"> 
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label @error('level_status') is-invalid @enderror" for="lavel_description">{{__('Description')}} <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="description" id="description" rows="5" placeholder="{{__("Enter Description")}}">{{isset($level) ? $level->description :old('description')}}</textarea>
                        </div>
                    </div>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    <div class="form-group row">
                        <div class="col-lg-10 ml-auto">
                            <button type="submit" class="btn btn-primary"> {{__('Submit')}}</button>

                        </div>

                    </div>
                   
                    