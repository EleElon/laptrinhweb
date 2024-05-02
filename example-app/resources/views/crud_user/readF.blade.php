@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>user_profile_id</th>
                            <th>user_id</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>sex</th>
                            <th>phone</th>
                            <th>address</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $messi->user_profile_id }}</td>
                            <td>{{ $messi->user_id }}</td>
                            <td>{{ $messi->first_name }}</td>
                            <td>{!! $messi->last_name !!}</td>
                            <td>{!! $messi->sex !!}</td>
                            <td>{!! $messi->phone !!}</td>
                            <td>{!! $messi->address !!}</td>

                        </tr>
                    </tbody>






                </table>


                <div class="pos">
                    <h1>POST</h1>
                    @foreach ($posts as $post)
                        <h4>post name</h4>
                        <p>{{ $post->post_name }}</p>
                        <h4>post description</h4>
                        <p>{{ $post->post_description }}</p>
                    @endforeach
                    <h1>so thich</h1>
                    {{-- @foreach ($st as $st)
                    <p>{{ $st->favorite_name }}</p>
                    <p>{{ $st->favorite_description }}</p>
                    @endforeach
                    --}}
                  

                </div>

            </div>
        </div>
    </main>
@endsection