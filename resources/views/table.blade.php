
@extends('layout.body')
    @section('content')

    @include('layout.nav-bar')
    <section class="home hero">
      <div class="open-overlay">
        <span class="bar-top"></span>
        <span class="bar-middle"></span>
        <span class="bar-bottom"></span>
      </div>

      <div class="table-sec">
        <h1>Favourite Thing</h1>
        <table class="container">
          <thead>
            <tr>
                <th>
                    <a href="{{ route('table', ['sort' => 'nama', 'direction' => ($sortField == 'nama' && $sortDirection == 'asc') ? 'desc' : 'asc']) }}">
                        Nama
                        @if ($sortField == 'nama')
                            @if ($sortDirection == 'asc')
                                &#9650;
                            @else
                                &#9660;
                            @endif
                        @endif
                    </a>
                </th>
                <th>Function</th>
                <th>Price</th>
                <th>Size</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $show)
            <tr>
                <td>{{ $show->nama }}</td>
                <td>{{ $show->fungsi }}</td>
                <td>{{ $show->harga }}</td>
                <td>{{ $show->size }}</td>
                <td><a href="">Test</a></td>
                <td><a href="">Test</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>

    @endsection
