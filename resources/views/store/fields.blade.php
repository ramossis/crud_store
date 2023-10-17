<div class="row form-group">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Nombre:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="name" name="name"
                value="{{ old('title', $category->title ?? '') }}">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="location">Localización</label>
            <span class="text-primary" id="_button"><i class='bx bx-current-location'></i> Click para insertar
                ubicación actual</span>
            <input type="text" class="form-control" id="location" name="location" placeholder="Clic en el icono"
                value="{{ old('location', $challenge->location ?? '') }}" readonly>
            @error('location')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nit" class="form-label">NIT:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="nit" name="nit"
                value="{{ old('title', $category->title ?? '') }}">
            @error('nit')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Estado:</label><b class="text-danger"> *</b>
            <input type="text" class="form-control" id="status" name="status"
                value="{{ old('title', $category->title ?? '') }}">
            @error('status')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <label><strong>Imagen:</strong></label>

            <input type="file" accept="image/*" name="front_page" onchange="previewImage(event, '#imgPreview')">
            <img class="mt-3" id="imgPreview" src="{!! old(
                'icon',
                $category->icon ??
                    'https://e7.pngegg.com/pngimages/854/638/png-clipart-computer-icons-preview-batch-miscellaneous-angle-thumbnail.png',
            ) !!}" height="100" width="100">
            @error('front-page')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>
        <div class="col-md-12 text-center">
            <label for="description" class="form-label">Descripcion:</label><b class="text-danger"> *</b>
            <textarea  class="form-control" id="description" name="description" cols="30" rows="10" placeholder="Descripcion"></textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
