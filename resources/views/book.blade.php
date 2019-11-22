@extends('layouts.app')

@section('content')
{{--    @import "../node_modules/angular-calendar/css/angular-calendar.css";--}}
{{--    @NgModule({--}}
{{--    imports: [--}}
{{--    BrowserAnimationsModule,--}}
{{--    CalendarModule.forRoot({--}}
{{--    provide: DateAdapter,--}}
{{--    useFactory: adapterFactory--}}
{{--    })--}}
{{--    ]--}}
{{--    })--}}
{{--    export class MyModule {}--}}
<mwl-demo-utils-calendar-header
    [(view)]="view"
    [(viewDate)]="viewDate"
    (viewDateChange)="fetchEvents()"
    (viewChange)="fetchEvents()"
>
</mwl-demo-utils-calendar-header>

<ng-template #loading>
    <div class="text-center">
        <i class="fa fa-spin fa-spinner fa-5x"></i> <br />
        Loading events...
    </div>
</ng-template>

<div *ngIf="events$ | async; else loading; let events">
    <div [ngSwitch]="view">
        <mwl-calendar-month-view
            *ngSwitchCase="'month'"
            [viewDate]="viewDate"
            [events]="events"
            [activeDayIsOpen]="activeDayIsOpen"
            (dayClicked)="dayClicked($event.day)"
            (eventClicked)="eventClicked($event.event)">
        </mwl-calendar-month-view>
        <mwl-calendar-week-view
            *ngSwitchCase="'week'"
            [viewDate]="viewDate"
            [events]="events"
            (eventClicked)="eventClicked($event.event)">
        </mwl-calendar-week-view>
        <mwl-calendar-day-view
            *ngSwitchCase="'day'"
            [viewDate]="viewDate"
            [events]="events"
            (eventClicked)="eventClicked($event.event)">
        </mwl-calendar-day-view>
    </div>
</div>
@endsection
