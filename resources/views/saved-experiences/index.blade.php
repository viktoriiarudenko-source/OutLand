<h1>Mes expériences enregistrées</h1>

@if ($savedExperiences->isEmpty())

    <p>Vous n'avez encore enregistré aucune expérience.</p>

@else

    @foreach ($savedExperiences as $savedExperience)

        <div>

            <h2>{{ $savedExperience->experience->title }}</h2>

            <p>
                Destination :
                {{ $savedExperience->experience->destination->name }}
            </p>

            <p>
                Publié par :
                {{ $savedExperience->experience->user->name }}
            </p>

            <p>
                {{ $savedExperience->experience->content }}
            </p>

            @if ($savedExperience->experience->photo)
                <img
                    src="{{ asset('storage/' . $savedExperience->experience->photo) }}"
                    width="300"
                >
            @endif

            <form
                action="/experiences/{{ $savedExperience->experience->id }}/save"
                method="POST"
            >
                @csrf
                @method('DELETE')

                <button type="submit">
                    ♥ Retirer des favoris
                </button>
            </form>

            <a href="/destinations/{{ $savedExperience->experience->destination->id }}">
                Voir la destination
            </a>

        </div>

    @endforeach

@endif