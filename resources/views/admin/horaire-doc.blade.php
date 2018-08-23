@extends('/layouts/masters2',['title'=>'Horaire Docteur'])

@section('contenu')

<section class="content page-calendar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-3">
                <div class="card m-t-20">
                    <div class="body">
                        <button type="button" class="btn btn-raised btn-primary btn-sm m-t-0" data-toggle="modal" href="#cal-new-event"> <i class="zmdi zmdi-plus"></i> Evenements</button>
                        <button class="btn btn-sm btn-default hidden-lg-up m-t-0" data-toggle="collapse" data-target=L'événement personnalisé"#open-chats" aria-expanded="false" aria-controls="collapseExample"><i class="zmdi zmdi-chevron-down"></i></button>
                        <div class="collapse-xs collapse-sm collapse" id="open-chats">
                            <div class="event-name b-greensea"> L'événement personnalisé #1 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-lightred"> L'événement personnalisé #2 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-amethyst"> L'événement personnalisé #3 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-amethyst"> L'événement personnalisé #4 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-success"> L'événement personnalisé #5 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-lightred"> L'événement personnalisé #6 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-greensea"> L'événement personnalisé #7 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-success"> L'événement personnalisé #8 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-success"> L'événement personnalisé #9 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-primary"> L'événement personnalisé #10 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>                
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="card m-t-20">
                    <div class="body">
                        <button class="btn btn-raised btn-success btn-sm m-r-0 m-t-0" id="change-view-today">Aujourd'hui</button>
                        <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-day" >Jour</button>
                        <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-week">Semaine</button>
                        <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-month">Mois</button>                        
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection