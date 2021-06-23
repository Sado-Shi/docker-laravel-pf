@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">プロフィール設定</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form>
                        <div>
                            <input type="text" placeholder="👦 test01">
                        </div>
                    </form>
                    <div>
                        <button><span>変更を保存</span></button>
                    </div>
                    <div>
                        <h5>メールアドレス</h5>
                        <div>
                            <p>tarou@gmail.com</p>
                        </div>
                    </div>

                    <div>
                        <button><a href="#">ログアウトする</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection