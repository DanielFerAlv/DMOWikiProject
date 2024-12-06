@csrf
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre',$digimon->nombre) }}" required maxlength="150"/>
    @error('titulo')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <textarea class="form-control" id="descripcion" name="descripcion" required maxlength="1000">
    {{ old('descripcion',$digimon->descripcion) }}
    </textarea>
    @error('descripcion')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="rango" class="form-label">Rango:</label>
    <select class="form-select" id="rango" name="rango" value="{{ old('rango',$digimon->rango) }}" required>
        <option value="Sin rango">Sin rango</option>
        @if ($digimon->rango == "A")
        <option value="A" selected>A</option>
        @else
        <option value="A">A</option>
        @endif
        @if ($digimon->rango == "A+")
        <option value="A+" selected>A+</option>
        @else
        <option value="A+">A+</option>
        @endif
        @if ($digimon->rango == "S")
        <option value="S" selected>S</option>
        @else
        <option value="S">S</option>
        @endif
        @if ($digimon->rango == "S+")
        <option value="S+" selected>S+</option>
        @else
        <option value="S+">S+</option>
        @endif
        @if ($digimon->rango == "SS")
        <option value="SS" selected>SS</option>
        @else
        <option value="SS">SS</option>
        @endif
        @if ($digimon->rango == "SS+")
        <option value="SS+" selected>SS+</option>
        @else
        <option value="SS+">SS+</option>
        @endif
        @if ($digimon->rango == "SSS")
        <option value="SSS" selected>SSS</option>
        @else
        <option value="SSS">SSS</option>
        @endif
        @if ($digimon->rango == "SSS+")
        <option value="SSS+" selected>SSS+</option>
        @else
        <option value="SSS+">SSS+</option>
        @endif
        @if ($digimon->rango == "U")
        <option value="U" selected>U</option>
        @else
        <option value="U">U</option>
        @endif
        @if ($digimon->rango == "U+")
        <option value="U+" selected>U+</option>
        @else
        <option value="U+">U+</option>
        @endif
    </select>
    @error('rango')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="nivel" class="form-label">Nivel:</label>
    <select class="form-select" id="nivel" name="nivel" value="{{ old('nivel',$digimon->nivel) }}">
        <option value="">Seleccione un nivel...</option>
        @if ($digimon->nivel == "Armor")
        <option value="Armor" selected>Armor</option>
        @else
        <option value="Armor">Armor</option>
        @endif
        @if ($digimon->nivel == "B-Hybrid")
        <option value="B-Hybrid" selected>Beast-Hybrid</option>
        @else
        <option value="B-Hybrid">Beast-Hybrid</option>
        @endif
        @if ($digimon->nivel == "Burst Mode")
        <option value="Burst Mode" selected>Burst Mode</option>
        @else
        <option value="Burst Mode">Burst Mode</option>
        @endif
        @if ($digimon->nivel == "Burst Mode X")
        <option value="Burst Mode X" selected>Burst Mode X</option>
        @else
        <option value="Burst Mode X">Burst Mode X</option>
        @endif
        @if ($digimon->nivel == "Champion")
        <option value="Champion" selected>Champion</option>
        @else
        <option value="Champion">Champion</option>
        @endif
        @if ($digimon->nivel == "Champion X")
        <option value="Champion X" selected>Champion X</option>
        @else
        <option value="Champion X">Champion X</option>
        @endif
        @if ($digimon->nivel == "H-Hybrid")
        <option value="H-Hybrid" selected>Human-Hybrid</option>
        @else
        <option value="H-Hybrid">Human-Hybrid</option>
        @endif
        @if ($digimon->nivel == "In-Training")
        <option value="In-Training" selected>In-Training</option>
        @else
        <option value="In-Training">In-Training</option>
        @endif
        @if ($digimon->nivel == "Jogress")
        <option value="Jogress" selected>Jogress</option>
        @else
        <option value="Jogress">Jogress</option>
        @endif
        @if ($digimon->nivel == "Jogress X")
        <option value="Jogress X" selected>Jogress X</option>
        @else
        <option value="Jogress X">Jogress X</option>
        @endif
        @if ($digimon->nivel == "Mega")
        <option value="Mega" selected>Mega</option>
        @else
        <option value="Mega">Mega</option>
        @endif
        @if ($digimon->nivel == "Mega X")
        <option value="Mega X" selected>Mega X</option>
        @else
        <option value="Mega X">Mega X</option>
        @endif
        @if ($digimon->nivel == "Rookie")
        <option value="Rookie" selected>Rookie</option>
        @else
        <option value="Rookie">Rookie</option>
        @endif
        @if ($digimon->nivel == "Rookie X")
        <option value="Rookie X" selected>Rookie X</option>
        @else
        <option value="Rookie X">Rookie X</option>
        @endif
        @if ($digimon->nivel == "Side Mega")
        <option value="Side Mega" selected>Side Mega</option>
        @else
        <option value="Side Mega">Side Mega</option>
        @endif
        @if ($digimon->nivel == "Ultimate")
        <option value="Ultimate" selected>Ultimate</option>
        @else
        <option value="Ultimate">Ultimate</option>
        @endif
        @if ($digimon->nivel == "Ultimate X")
        <option value="Ultimate X" selected>Ultimate X</option>
        @else
        <option value="Ultimate X">Ultimate X</option>
        @endif
        @if ($digimon->nivel == "Z-Hybrid")
        <option value="Z-Hybrid" selected>Zeta-Hybrid</option>
        @else
        <option value="Z-Hybrid">Zeta-Hybrid</option>
        @endif
    </select>
    @error('nivel')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="utilidad" class="form-label">Utilidad:</label>
    <input type="text" class="form-control" id="utilidad" name="utilidad" value="{{ old('utilidad',$digimon->utilidad) }}" required maxlength="50"/>
    @error('utilidad')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="atributo" class="form-label">Atributo:</label>
    <select class="form-select" id="atributo" name="atributo" value="{{ old('atributo',$digimon->atributo) }}" required>
        <option value="">Seleccione el atributo...</option>
        @if ($digimon->atributo == "Vacuna")
        <option value="Vacuna" selected>Vacuna</option>
        @else
        <option value="Vacuna">Vacuna</option>
        @endif
        @if ($digimon->atributo == "Datos")
        <option value="Datos" selected>Datos</option>
        @else
        <option value="Datos">Datos</option>
        @endif
        @if ($digimon->atributo == "Virus")
        <option value="Virus" selected>Virus</option>
        @else
        <option value="Virus">Virus</option>
        @endif
        @if ($digimon->atributo == "Unknown")
        <option value="Unknown" selected>Unknown</option>
        @else
        <option value="Unknown">Unknown</option>
        @endif
        @if ($digimon->atributo == "None")
        <option value="None" selected>None</option>
        @else
        <option value="None">None</option>
        @endif
    </select>
    @error('atributo')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="tipo" class="form-label">Tipo:</label>
    <select class="form-select" id="tipo" name="tipo" value="{{ old('tipo',$digimon->tipo) }}" required>
        <option value="">Seleccione el tipo...</option>
        @if ($digimon->tipo == "Fuego")
        <option value="Fuego" selected>Fuego</option>
        @else
        <option value="Fuego">Fuego</option>
        @endif
        @if ($digimon->tipo == "Hielo")
        <option value="Hielo" selected>Hielo</option>
        @else
        <option value="Hielo">Hielo</option>
        @endif
        @if ($digimon->tipo == "Agua")
        <option value="Agua" selected>Agua</option>
        @else
        <option value="Agua">Agua</option>
        @endif
        @if ($digimon->tipo == "Tierra")
        <option value="Tierra" selected>Tierra</option>
        @else
        <option value="Tierra">Tierra</option>
        @endif
        @if ($digimon->tipo == "Viento")
        <option value="Viento" selected>Viento</option>
        @else
        <option value="Viento">Viento</option>
        @endif
        @if ($digimon->tipo == "Madera")
        <option value="Madera" selected>Madera</option>
        @else
        <option value="Madera">Madera</option>
        @endif
        @if ($digimon->tipo == "Rayo")
        <option value="Rayo" selected>Rayo</option>
        @else
        <option value="Rayo">Rayo</option>
        @endif
        @if ($digimon->tipo == "Oscuridad")
        <option value="Oscuridad" selected>Oscuridad</option>
        @else
        <option value="Oscuridad">Oscuridad</option>
        @endif
        @if ($digimon->tipo == "Luz")
        <option value="Luz" selected>Luz</option>
        @else
        <option value="Luz">Luz</option>
        @endif
        @if ($digimon->tipo == "Metal")
        <option value="Metal" selected>Metal</option>
        @else
        <option value="Metal">Metal</option>
        @endif
        @if ($digimon->tipo == "Neutral")
        <option value="Neutral" selected>Neutral</option>
        @else
        <option value="Neutral">Neutral</option>
        @endif
    </select>
    @error('tipo')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="health_points" class="form-label">Puntos de Salud(HP) a nivel máximo:</label>
    <input type="number" class="form-control" id="health_points" name="health_points" value="{{ old('health_points',$digimon->health_points) }}" required max="99999"/>
    @error('health_points')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="digisoul_points" class="form-label">Puntos de Digisoul(DS) a nivel máximo:</label>
    <input type="number" class="form-control" id="digisoul_points" name="digisoul_points" value="{{ old('digisoul_points',$digimon->digisoul_points) }}" required max="9999"/>
    @error('digisoul_points')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="attack" class="form-label">Ataque a nivel máximo:</label>
    <input type="number" class="form-control" id="attack" name="attack" value="{{ old('attack',$digimon->attack) }}" required max="9999"/>
    @error('attack')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="attack_speed" class="form-label">Velocidad de Ataque:</label>
    <input type="number" class="form-control" id="attack_speed" name="attack_speed" value="{{ old('attack_speed',$digimon->attack_speed) }}" required max="3" min="1" step=".1"/>
    @error('attack_speed')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="critical_chance" class="form-label">Probabilidad de crítico a nivel máximo:</label>
    <input type="number" class="form-control" id="critical_chance" name="critical_chance" value="{{ old('critical_chance',$digimon->critical_chance) }}" required max="35" min="10" step=".01"/>
    @error('critical_chance')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="hitrate" class="form-label">Ratio de golpe(hitrate):</label>
    <input type="number" class="form-control" id="hitrate" name="hitrate" value="{{ old('hitrate',$digimon->hitrate) }}" required max="1100" min="300"/>
    @error('hitrate')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="defense" class="form-label">Defensa a nivel máximo:</label>
    <input type="number" class="form-control" id="defense" name="defense" value="{{ old('defense',$digimon->defense) }}" required max="9999"/>
    @error('defense')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="evasion" class="form-label">Evasión:</label>
    <input type="number" class="form-control" id="evasion" name="evasion" value="{{ old('evasion',$digimon->evasion) }}" required max="99" min="10" step=".01"/>
    @error('evasion')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill1" class="form-label">Nombre del F1 (habilidad 1):</label>
    <input type="text" class="form-control" id="skill1" name="skill1" value="{{ old('skill1',$digimon->skill1) }}" required maxlength="200"/>
    @error('skill1')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill1_base" class="form-label">Daño base del F1 (habilidad 1):</label>
    <input type="number" class="form-control" id="skill1_base" name="skill1_base" value="{{ old('skill1_base',$digimon->skill1_base) }}" required max="99999"/>
    @error('skill1_base')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill1_increment" class="form-label">Incremento por nivel del F1 (habilidad 1):</label>
    <input type="number" class="form-control" id="skill1_increment" name="skill1_increment" value="{{ old('skill1_increment',$digimon->skill1_increment) }}" required max="9999"/>
    @error('skill1_increment')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill1_special" class="form-label">Efecto especial del F1 (habilidad 1):</label>
    <input type="text" class="form-control" id="skill1_special" name="skill1_special" value="{{ old('skill1_special',$digimon->skill1_special) }}" maxlength="1000"/>
    @error('skill1_special')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill2" class="form-label">Nombre del F2 (habilidad 2):</label>
    <input type="text" class="form-control" id="skill2" name="skill2" value="{{ old('skill2',$digimon->skill2) }}" required maxlength="200"/>
    @error('skill2')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill2_base" class="form-label">Daño base del F2 (habilidad 2):</label>
    <input type="number" class="form-control" id="skill2_base" name="skill2_base" value="{{ old('skill2_base',$digimon->skill2_base) }}" required max="99999"/>
    @error('skill2_base')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill2_increment" class="form-label">Incremento por nivel del F2:</label>
    <input type="number" class="form-control" id="skill2_increment" name="skill2_increment" value="{{ old('skill2_increment',$digimon->skill2_increment) }}" required max="9999"/>
    @error('skill2_increment')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill2_special" class="form-label">Efecto especial del F2 (habilidad 2):</label>
    <input type="text" class="form-control" id="skill2_special" name="skill2_special" value="{{ old('skill2_special',$digimon->skill2_special) }}" maxlength="1000"/>
    @error('skill2_special')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill3" class="form-label">Nombre del F3 (habilidad 3):</label>
    <input type="text" class="form-control" id="skill3" name="skill3" value="{{ old('skill3',$digimon->skill3) }}" maxlength="200"/>
    @error('skill3')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill3_base" class="form-label">Daño base del F3 (habilidad 3):</label>
    <input type="number" class="form-control" id="skill3_base" name="skill3_base" value="{{ old('skill3_base',$digimon->skill3_base) }}" max="999999"/>
    @error('skill3_base')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill3_increment" class="form-label">Incremento por nivel del F3 (habilidad 3):</label>
    <input type="number" class="form-control" id="skill3_increment" name="skill3_increment" value="{{ old('skill3_increment',$digimon->skill3_increment) }}" max="9999"/>
    @error('skill3_increment')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill3_special" class="form-label">Efecto especial del F3 (habilidad 3):</label>
    <input type="text" class="form-control" id="skill3_special" name="skill3_special" value="{{ old('skill3_special',$digimon->skill3_special) }}" maxlength="1000"/>
    @error('skill3_special')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill4" class="form-label">Nombre del F4 (habilidad 4):</label>
    <input type="text" class="form-control" id="skill4" name="skill4" value="{{ old('skill4',$digimon->skill4) }}" maxlength="200"/>
    @error('skill4')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill4_base" class="form-label">Daño base del F4 (habilidad 4):</label>
    <input type="number" class="form-control" id="skill4_base" name="skill4_base" value="{{ old('skill4_base',$digimon->skill4_base) }}" max="99999"/>
    @error('skill4_base')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill4_increment" class="form-label">Incremento por nivel del F4 (habilidad 4):</label>
    <input type="number" class="form-control" id="skill4_increment" name="skill4_increment" value="{{ old('skill4_increment',$digimon->skill4_increment) }}" max="9999"/>
    @error('skill4_increment')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="skill4_special" class="form-label">Efecto especial del F4 (habilidad 4):</label>
    <input type="text" class="form-control" id="skill4_special" name="skill4_special" value="{{ old('skill4_special',$digimon->skill4_special) }}" maxlength="1000"/>
    @error('skill4_special')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="foto" class="form-label">Imagen/Modelo:</label>
    <input type="file" class="form-control" id="foto" name="foto" value="{{ old('foto',$digimon->foto) }}"/>
    @error('foto')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="icono" class="form-label">Icono:</label>
    <input type="file" class="form-control" id="icono" name="icono" value="{{ old('icono',$digimon->icono) }}"/>
    @error('icono')
    <small class="alert alert-danger">{{ $message }}</small>
    @enderror
</div>
