
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
                <td><a href="{{ route('update', $show->id) }}">Click Here</a></td>
                <td>
                    <form id="delete-form-{{ $show->id }}" action="{{ route('data.destroy', $show->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this data?')) { document.getElementById('delete-form-{{ $show->id }}').submit(); }">Click Here</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </section>

    @endsection
