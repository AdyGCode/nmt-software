<x-app-layout>

    <x-slot name="header">

    </x-slot>

    <div class="container-fluid">
        @include('modals.modal_upload')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-12 mb-4">
                    <button type="button" class="btn btn-primary btn-ico" data-toggle="modal" data-target="#uploaderModal"><i
                                class="fa fa-files-o"></i> {{ __('File Upload') }}</button>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="footer_resources">
        <!-- Scripts -->
        <script src="{{ asset('vendor/dropzone/dropzone.min.js') }}" defer></script>
        <script src="{{ asset('js/file_upload.js') }}" defer></script>

        <script>
            var home_url = "{{env('APP_URL') }}";
            var deleteAction = '{{ route("file-delete") }}';
            var generalTS = document.getElementById('dataTS').value;
            var generalDATE = document.getElementById('dataDATE').value;
            var token = '{!! csrf_token() !!}';
        </script>
    </x-slot>
</x-app-layout>
