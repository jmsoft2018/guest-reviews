@extends('guest-reviews::layout')

@section('content')
    <div class="container">

        @if (isset($success))
            <div class="alert alert-success">Сделано!</div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            @foreach($reviews as $review)
                <div class="col-12">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success text-success">
                            {{$review->author}}
                            <span class="badge badge-light badge-secondary">{{$review->created_at}}</span>
                            <form action="{{ route('guest-reviews.destroy', $review->id) }}" method="post" class="close">
                                {{ method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" title="Удалить">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$review->text}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <form action="<?= route('guest-reviews')?>" method="post" class="needs-validation" novalidate>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="card border-success m-1">
                <div class="card-body text-success">
                    <h5 class="card-title">
                        <label for="">Добавьте свой отзыв</label>
                    </h5>
                    <p>
                        <div class="form-group">
                            <label for="review-author">Имя автора</label>
                            <input name="author" type="text" class="form-control" id="review-author" required>
                            <div class="invalid-feedback">Введите имя автора!</div>
                        </div>
                        <div class="form-group">
                            <label for="review-text">Cообщение</label>
                            <textarea name="text" class="form-control" id="review-text" rows="3" required></textarea>
                            <div class="invalid-feedback">Введите текст сообщения!</div>
                        </div>
                    </p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <input type="submit" value="Добавить" class="btn btn-outline-success">
                </div>
            </div>
        </form>
    </div>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection