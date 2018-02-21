@extends('app')

@section('content')

  {{--  <input type="text" placeholder="text" v-model="coupon">  --}}
  {{--  <input type="text" placeholder="text" :value="coupon" @input="coupon = $event.target.value">  --}}

  <coupon v-model="coupon"></coupon>
  {{--  <coupon v-model="coupon"></coupon>  --}}


@endsection