@extends('index.basic')

@section('title', '招新报名系表')

@section('main')
    {!! Form::open(['route' => 'recruitment.apply:action']) !!}
        <div class="columns">
            <div class="column">
                <div class="field">
                    <p class="control">
                        <input
                            class="input @if ($errors->has('name')) is-danger @endif"
                            type="text"
                            name="name"
                            placeholder="姓名"
                            value="{{ old('name', '') }}">
                    </p>
                @if ($errors->has('name'))
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                @endif
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <p class="control">
                        <input
                            class="input @if ($errors->has('birthday')) is-danger @endif"
                            type="text"
                            name="birthday"
                            placeholder="生日"
                            value="{{ old('birthday', '') }}">
                    </p>
                @if ($errors->has('birthday'))
                    <p class="help is-danger">{{ $errors->first('birthday') }}</p>
                @endif
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <p class="control">
                        <label class="radio">
                            <input type="radio" name="gender" value="0" @if (!old('expectation', '')) checked @endif>
                            <span>男</span>
                        </label>
                        <label class="radio">
                            <input type="radio" name="gender" value="1" @if (old('expectation', '')) checked @endif>
                            <span>女</span>
                        </label>
                    </p>
                @if ($errors->has('gender'))
                    <p class="help is-danger">{{ $errors->first('gender') }}</p>
                @endif
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <p class="control">
                        <input
                            class="input @if ($errors->has('school_number')) is-danger @endif"
                            type="text"
                            name="school_number"
                            placeholder="学号"
                            value="{{ old('school_number', '') }}">
                    </p>
                @if ($errors->has('school_number'))
                    <p class="help is-danger">{{ $errors->first('school_number') }}</p>
                @endif
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <p class="control">
                        <input
                            class="input @if ($errors->has('qq')) is-danger @endif"
                            type="text"
                            name="qq"
                            placeholder="扣扣"
                            value="{{ old('qq', '') }}">
                    </p>
                @if ($errors->has('qq'))
                    <p class="help is-danger">{{ $errors->first('qq') }}</p>
                @endif
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="field">
                    <p class="control">
                        <input
                            class="input @if ($errors->has('phone')) is-danger @endif"
                            type="text"
                            name="phone"
                            placeholder="联系电话"
                            value="{{ old('phone', '') }}">
                    </p>
                @if ($errors->has('phone'))
                    <p class="help is-danger">{{ $errors->first('phone') }}</p>
                @endif
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <p class="control">
                        <input
                            class="input @if ($errors->has('email')) is-danger @endif"
                            type="text"
                            name="email"
                            placeholder="常用邮箱"
                            value="{{ old('email', '') }}">
                    </p>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
                </div>
            </div>
        </div>
        <div class="field">
            <p class="control">
                <textarea
                    class="textarea @if ($errors->has('introduction')) is-danger @endif"
                    name="introduction"
                    placeholder="个人简介">{{ old('introduction', '') }}</textarea>
            </p>
        @if ($errors->has('introduction'))
            <p class="help is-danger">{{ $errors->first('introduction') }}</p>
        @endif
        </div>
        <div class="field">
            <p class="control">
                <textarea
                    class="textarea @if ($errors->has('expectation')) is-danger @endif"
                    name="expectation"
                    placeholder="个人期望">{{ old('expectation', '') }}</textarea>
            </p>
        @if ($errors->has('expectation'))
            <p class="help is-danger">{{ $errors->first('expectation') }}</p>
        @endif
        </div>
        <div class="field">
            <p class="control">
                <textarea
                    class="textarea @if ($errors->has('skill')) is-danger @endif"
                    name="skill"
                    placeholder="技能">{{ old('skill', '') }}</textarea>
            </p>
        @if ($errors->has('skill'))
            <p class="help is-danger">{{ $errors->first('skill') }}</p>
        @endif
        </div>
        <button type="submit" class="button is-primary">确认提交</button>
    {!! Form::close() !!}
@endsection
