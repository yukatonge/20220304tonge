@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  </style>
  @section('title', 'index.blade.php')

  @section('content')
  <table>
    <tr>
      <th>id</th>
      <th>content</th>
      <th>created_at</th>
      <th>updated_at</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>
        {{$item->id}}
      </td>
      <td>
        {{$item->content}}
      </td>
      <td>
        {{$item->created_at}}
      </td>
      <td>
        {{$item->updated_at}}
      </td>
    </tr>
    @endforeach
  </table>
  @endsection