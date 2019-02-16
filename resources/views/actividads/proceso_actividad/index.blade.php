<div class="content">
    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="{{URL::to('/actividades/add/').'/'.$procesos->id}}">Add</a>
    </div>
    @include('actividads.proceso_actividad.table')
</div>