<x-admin.layout title="History">
    <h1>History</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="timeline">
                @foreach($days as $day)
                    <div class="time-label">
                        <span class="bg-red">{{ $day->first()->created_at->toDateString() }}<i class="fas fa-trash mx-2"></i></span>
                    </div>
                    @foreach($day as $event)
                        <div>
                            <i class="fas {{ $event->icon }}"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> {{ $event->created_at->toTimeString('minute') }}</span>
                                <h3 class="timeline-header">{!! $event->title !!}</h3>

                                <div class="timeline-body">
                                    {{ $event->description }}
                                </div>
                                <div class="timeline-footer">
                                    @if($event->link)
                                        <a href="{{ $event->link }}" class="btn btn-primary btn-sm">Link</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

                <div>
                    <i class="fas fa-clock bg-gray"></i>
                </div>


            </div>
            <div>
                <x-forms.delete action="{{ route('events.clear') }}">
                    <button class="btn btn-danger">Clear History</button>
                </x-forms.delete>
            </div>
        </div>

    </div>
</x-admin.layout>
