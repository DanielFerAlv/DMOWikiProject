@csrf
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre',$tamer->nombre) }}" required maxlength="150"/>
    @error('titulo')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <textarea class="form-control" id="descripcion" name="descripcion" required maxlength="1000">
    {{ old('descripcion',$tamer->descripcion) }}
    </textarea>
    @error('descripcion')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="utilidad" class="form-label">Utilidad:</label>
    <input type="text" class="form-control" id="utilidad" name="utilidad" value="{{ old('utilidad',$tamer->utilidad) }}" required maxlength="50"/>
    @error('utilidad')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="health_points" class="form-label">Puntos de Salud(HP) a nivel uno:</label>
    <input type="number" class="form-control" id="health_points" name="health_points" value="{{ old('health_points',$tamer->health_points) }}" required max="999"/>
    @error('health_points')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="digisoul_points" class="form-label">Puntos de Digisoul(DS) a nivel uno:</label>
    <input type="number" class="form-control" id="digisoul_points" name="digisoul_points" value="{{ old('digisoul_points',$tamer->digisoul_points) }}" required max="999"/>
    @error('digisoul_points')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="attack" class="form-label">Ataque a nivel uno:</label>
    <input type="number" class="form-control" id="attack" name="attack" value="{{ old('attack',$tamer->attack) }}" required max="99"/>
    @error('attack')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="defense" class="form-label">Defensa a nivel uno:</label>
    <input type="number" class="form-control" id="defense" name="defense" value="{{ old('defense',$tamer->defense) }}" required max="99"/>
    @error('defense')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="active_skill_name" class="form-label">Nombre de la habilidad activa:</label>
    <input type="text" class="form-control" id="active_skill_name" name="active_skill_name" value="{{ old('active_skill_name',$tamer->active_skill_name) }}" required maxlength="200"/>
    @error('active_skill_name')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="active_skill_effect" class="form-label">Efecto de la habilidad activa:</label>
    <input type="text" class="form-control" id="active_skill_effect" name="active_skill_effect" value="{{ old('active_skill_effect',$tamer->active_skill_effect) }}" required maxlength="200"/>
    @error('active_skill_effect')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="active_skill_cooldown" class="form-label">Tiempo de refresco (cooldown) de la habilidad activa:</label>
    <input type="text" class="form-control" id="active_skill_cooldown" name="active_skill_cooldown" value="{{ old('active_skill_cooldown',$tamer->active_skill_cooldown) }}" required maxlength="200"/>
    @error('active_skill_cooldown')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="passive_skill_name" class="form-label">Nombre de la habilidad pasiva:</label>
    <input type="text" class="form-control" id="passive_skill_name" name="passive_skill_name" value="{{ old('passive_skill_name',$tamer->passive_skill_name) }}" required maxlength="200"/>
    @error('passive_skill_name')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="passive_skill_effect1" class="form-label">Efecto 1 de la habilidad pasiva:</label>
    <input type="text" class="form-control" id="passive_skill_effect1" name="passive_skill_effect1" value="{{ old('passive_skill_effect1',$tamer->passive_skill_effect1) }}" required maxlength="200"/>
    @error('passive_skill_effect1')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="passive_skill_effect2" class="form-label">Efecto 2 de la habilidad pasiva:</label>
    <input type="text" class="form-control" id="passive_skill_effect2" name="passive_skill_effect2" value="{{ old('passive_skill_effect2',$tamer->passive_skill_effect2) }}" required maxlength="200"/>
    @error('passive_skill_effect2')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="active_skill_icon" class="form-label">Icono de la habilidad activa:</label>
    <input type="file" class="form-control" id="active_skill_icon" name="active_skill_icon" value="{{ old('active_skill_icon',$tamer->active_skill_icon) }}"/>
    @error('active_skill_icon')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="passive_skill_icon" class="form-label">Icono de la habilidad pasiva:</label>
    <input type="file" class="form-control" id="passive_skill_icon" name="passive_skill_icon" value="{{ old('passive_skill_icon',$tamer->passive_skill_icon) }}"/>
    @error('passive_skill_icon')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="tamer_icon" class="form-label">Icono del Tamer/Entrenador:</label>
    <input type="file" class="form-control" id="tamer_icon" name="tamer_icon" value="{{ old('tamer_icon',$tamer->tamer_icon) }}"/>
    @error('tamer_icon')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="tamer_model" class="form-label">Imagen/Modelo del Tamer/Entrenador:</label>
    <input type="file" class="form-control" id="tamer_model" name="tamer_model" value="{{ old('tamer_model',$tamer->tamer_model) }}"/>
    @error('tamer_model')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>