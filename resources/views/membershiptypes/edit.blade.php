@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Membershiptype
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($membershiptype, ['route' => ['membershiptypes.update', $membershiptype->id], 'method' => 'patch']) !!}

                        @include('membershiptypes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection