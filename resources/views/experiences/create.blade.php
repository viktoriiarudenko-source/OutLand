<x-app-layout>

    <div class="experience-create-page">

        <h1 class="experience-create-title">
            Ajouter un commentaire
        </h1>


        <form
            class="experience-form"
            action="/destinations/{{ $destinationId }}/experiences"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf


            {{-- TITRE --}}

            <div class="experience-form-group">

                <label for="title">
                    Titre
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    required
                >

            </div>


            {{-- COMMENTAIRE --}}

            <div class="experience-form-group">

                <label for="content">
                    Votre commentaire
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="6"
                    required
                ></textarea>

            </div>


            {{-- NOTE --}}

            <div class="experience-form-group">

                <label for="rating">
                    Note
                </label>

                <select
                    id="rating"
                    name="rating"
                    required
                >

                    <option value="">
                        Choisir une note
                    </option>

                    <option value="1">
                        ★☆☆☆☆ - 1/5
                    </option>

                    <option value="2">
                        ★★☆☆☆ - 2/5
                    </option>

                    <option value="3">
                        ★★★☆☆ - 3/5
                    </option>

                    <option value="4">
                        ★★★★☆ - 4/5
                    </option>

                    <option value="5">
                        ★★★★★ - 5/5
                    </option>

                </select>

            </div>


            {{-- PHOTO --}}

            <div class="experience-form-group">

                <label for="photo">
                    Ajouter une photo
                </label>

                <input
                    type="file"
                    id="photo"
                    name="photo"
                    accept="image/*"
                >

            </div>


            {{-- BOUTON --}}

            <button
                type="submit"
                class="publish-experience-button"
            >
                Publier
            </button>

        </form>


        {{-- RETOUR --}}

        <a
            href="/destinations/{{ $destinationId }}"
            class="back-to-destination"
        >
            ← Retour au pays
        </a>

    </div>

</x-app-layout>