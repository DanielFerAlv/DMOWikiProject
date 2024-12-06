@extends('plantillas.master')

@section('title')
<title>Digicomparador</title>
@stop

@section('otherstyles')
<style>
    @media (min-width: 765px) {
        #comparador {
            display: grid;
            grid-template-columns: 2;
            column-gap: 20px;
        }
        #digi1 {
            grid-column-start: 1;
            grid-column-end: 2;
        }
        #digi2 {
            grid-column-start: 2;
            grid-column-end: 3;
        }
    }
    tr>td {
        padding: 5px;
    }
    
</style>
@stop

@section('corpse')
<p class="alert alert-info">El siguiente comparador permite cotejar los datos de dos Digimon a elegir. Para dicha comparativa, se toman todos los datos de estadísticas de cada uno a nivel 120/130 (según disponibilidad de datos) y el daño de sus habilidades subidas a nivel máximo. Para datos más en detalle, consulte la entrada específica del Digimon en cuestión.</p>
<p class="alert alert-info">Cuando se elijan dos digimon, uno en cada selector, los fondos de las filas cambiarán. Aquellas filas de las tablas con fondo verde son aquellas cuyos valores son mayores que los de la otra tabla. Rojo los menores. Si ambos son naranja es que son iguales.</p>
<div id='comparador' class='align-middle text-center'>
    <div id='digi1' class="mb-5">
        <select id='selectdigi1' class="mb-5">
            <option value="">Seleccione un digimon a comparar...</option>
        </select>
        <div id='table1'>

        </div>
    </div>
    <div id='digi2' class='mb-5'>
        <select id='selectdigi2' class='mb-5'>
            <option value="">Seleccione un digimon a comparar...</option>
        </select>
        <div id='table2'>

        </div>
    </div>
</div>
<script>
    const select1 = document.getElementById('selectdigi1')
    const select2 = document.getElementById('selectdigi2')
    const table1 = document.getElementById('table1')
    const table2 = document.getElementById('table2')
    let aux1 = "";
    let aux2 = "";

    <?php
    $jsarray = json_encode($digimon);
    echo 'let digimonarray = ' . $jsarray . ";\n";
    ?>

    for (let i = 0; i < digimonarray.length; i++) {
        let option1 = document.createElement('option')
        let option2 = document.createElement('option')
        option1.value = i
        option2.value = i
        option1.innerText = digimonarray[i]['nombre']
        option2.innerText = digimonarray[i]['nombre']
        select1.appendChild(option1)
        select2.appendChild(option2)
    }

    function addStyles() {
        if (parseInt(document.getElementById("hp1").innerHTML) > parseInt(document.getElementById("hp2").innerHTML)) {
            document.getElementById("hp1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("hp2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("hp1").innerHTML) === parseInt(document.getElementById("hp2").innerHTML)) {
            document.getElementById("hp1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("hp2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("hp2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("hp1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("ds1").innerHTML) > parseInt(document.getElementById("ds2").innerHTML)) {
            document.getElementById("ds1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("ds2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("ds1").innerHTML) === parseInt(document.getElementById("ds2").innerHTML)) {
            document.getElementById("ds1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("ds2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("ds2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("ds1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("at1").innerHTML) > parseInt(document.getElementById("at2").innerHTML)) {
            document.getElementById("at1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("at2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("at1").innerHTML) === parseInt(document.getElementById("at2").innerHTML)) {
            document.getElementById("at1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("at2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("at2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("at1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseFloat(document.getElementById("as1").innerHTML) > parseFloat(document.getElementById("as2").innerHTML)) {
            document.getElementById("as2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("as1").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseFloat(document.getElementById("as1").innerHTML) === parseFloat(document.getElementById("as2").innerHTML)) {
            document.getElementById("as2").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("as1").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("as1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("as2").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseFloat(document.getElementById("ct1").innerHTML) > parseFloat(document.getElementById("ct2").innerHTML)) {
            document.getElementById("ct1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("ct2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseFloat(document.getElementById("ct1").innerHTML) === parseFloat(document.getElementById("ct2").innerHTML)) {
            document.getElementById("ct1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("ct2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("ct2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("ct1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("hit1").innerHTML) > parseInt(document.getElementById("hit2").innerHTML)) {
            document.getElementById("hit1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("hit2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("hit1").innerHTML) === parseInt(document.getElementById("hit2").innerHTML)) {
            document.getElementById("hit1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("hit2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("hit2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("hit1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("de1").innerHTML) > parseInt(document.getElementById("de2").innerHTML)) {
            document.getElementById("de1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("de2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("de1").innerHTML) === parseInt(document.getElementById("de2").innerHTML)) {
            document.getElementById("de1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("de2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("de2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("de1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("ev1").innerHTML) > parseInt(document.getElementById("ev2").innerHTML)) {
            document.getElementById("ev1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("ev2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("ev1").innerHTML) === parseInt(document.getElementById("ev2").innerHTML)) {
            document.getElementById("ev1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("ev2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("ev2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("ev1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("skill1_1").innerHTML) > parseInt(document.getElementById("skill1_2").innerHTML)) {
            document.getElementById("skill1_1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill1_2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("skill1_1").innerHTML) === parseInt(document.getElementById("skill1_2").innerHTML)) {
            document.getElementById("skill1_1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("skill1_2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("skill1_2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill1_1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (parseInt(document.getElementById("skill2_1").innerHTML) > parseInt(document.getElementById("skill2_2").innerHTML)) {
            document.getElementById("skill2_1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill2_2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("skill2_1").innerHTML) === parseInt(document.getElementById("skill2_2").innerHTML)) {
            document.getElementById("skill2_1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("skill2_2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("skill2_2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill2_1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        if (document.getElementById("skill3_1") != null &&  document.getElementById("skill3_2") != null) {
            if (parseInt(document.getElementById("skill3_1").innerHTML) > parseInt(document.getElementById("skill3_2").innerHTML)) {
            document.getElementById("skill3_1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill3_2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("skill3_1").innerHTML) === parseInt(document.getElementById("skill3_2").innerHTML)) {
            document.getElementById("skill3_1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("skill3_2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("skill3_2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill3_1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        } else {
            if (document.getElementById("skill3_1") != null) {
                document.getElementById("skill3_1").parentElement.style.backgroundColor = "#a4ff8c"
            } else {
                document.getElementById("skill3_2").parentElement.style.backgroundColor = "#a4ff8c"
            }
        }
        if (document.getElementById("skill4_1") != null &&  document.getElementById("skill4_2") != null) {
            if (parseInt(document.getElementById("skill4_1").innerHTML) > parseInt(document.getElementById("skill4_2").innerHTML)) {
            document.getElementById("skill4_1").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill4_2").parentElement.style.backgroundColor = "#ff7e7e"
        } else if (parseInt(document.getElementById("skill4_1").innerHTML) === parseInt(document.getElementById("skill4_2").innerHTML)) {
            document.getElementById("skill4_1").parentElement.style.backgroundColor = "#ffcc99"
            document.getElementById("skill4_2").parentElement.style.backgroundColor = "#ffcc99"
        } else {
            document.getElementById("skill4_2").parentElement.style.backgroundColor = "#a4ff8c"
            document.getElementById("skill4_1").parentElement.style.backgroundColor = "#ff7e7e"
        }
        } else {
            if (document.getElementById("skill4_1") != null) {
                document.getElementById("skill4_1").parentElement.style.backgroundColor = "#a4ff8c"
            } else if (document.getElementById("skill4_2") != null) {
                document.getElementById("skill4_2").parentElement.style.backgroundColor = "#a4ff8c"
            }
        }
    }

    function createTable(event, tabla, id) {
        if (event.target.value < 0 || event.target.value >= digimonarray.length || isNaN(event.target.value)) {
            tabla.innerHTML = ""
        } else {
            tabla.innerHTML = ""
            let table = document.createElement('table')
            table.setAttribute('class', 'table table-striped table-bordered border border-dark')
            let tr1 = document.createElement('tr')
            let nombre = document.createElement('th')
            nombre.setAttribute('colspan', '2')
            nombre.setAttribute('scope', 'col')
            nombre.setAttribute('class', 'text-center bg bg-dark text-white')
            nombre.innerText = digimonarray[event.target.value]['nombre']
            tr1.appendChild(nombre)
            table.appendChild(tr1)
            let tr2 = document.createElement('tr')
            let hp = document.createElement('td')
            let hp_value = document.createElement('td')
            hp.setAttribute('class', 'border border-dark')
            hp_value.setAttribute('class', 'border border-dark')
            hp.innerText = 'Vida'
            hp_value.setAttribute("id", "hp" + id)
            hp_value.innerText = digimonarray[event.target.value]['health_points']
            tr2.appendChild(hp)
            tr2.appendChild(hp_value)
            table.appendChild(tr2)
            let tr3 = document.createElement('tr')
            let ds = document.createElement('td')
            let ds_value = document.createElement('td')
            ds.setAttribute('class', 'border border-dark')
            ds_value.setAttribute('class', 'border border-dark')
            ds.innerText = 'Maná'
            ds_value.innerText = digimonarray[event.target.value]['digisoul_points']
            ds_value.setAttribute("id", "ds" + id)
            tr3.appendChild(ds)
            tr3.appendChild(ds_value)
            table.appendChild(tr3)
            let tr4 = document.createElement('tr')
            let at = document.createElement('td')
            let at_value = document.createElement('td')
            at.setAttribute('class', 'border border-dark')
            at_value.setAttribute('class', 'border border-dark')
            at.innerText = 'Ataque'
            at_value.innerText = digimonarray[event.target.value]['attack']
            at_value.setAttribute("id", "at" + id)
            tr4.appendChild(at)
            tr4.appendChild(at_value)
            table.appendChild(tr4)
            let tr5 = document.createElement('tr')
            let as = document.createElement('td')
            let as_value = document.createElement('td')
            as.setAttribute('class', 'border border-dark')
            as_value.setAttribute('class', 'border border-dark')
            as.innerText = 'Velocidad de Ataque'
            as_value.innerText = digimonarray[event.target.value]['attack_speed']
            as_value.setAttribute("id", "as" + id)
            tr5.appendChild(as)
            tr5.appendChild(as_value)
            table.appendChild(tr5)
            let tr6 = document.createElement('tr')
            let ct = document.createElement('td')
            let ct_value = document.createElement('td')
            ct.setAttribute('class', 'border border-dark')
            ct_value.setAttribute('class', 'border border-dark')
            ct.innerText = 'Probabilidad de Crítico'
            ct_value.innerText = digimonarray[event.target.value]['critical_chance'] + '%'
            ct_value.setAttribute("id", "ct" + id)
            tr6.appendChild(ct)
            tr6.appendChild(ct_value)
            table.appendChild(tr6)
            let tr7 = document.createElement('tr')
            let hit = document.createElement('td')
            let hit_value = document.createElement('td')
            hit.setAttribute('class', 'border border-dark')
            hit_value.setAttribute('class', 'border border-dark')
            hit.innerText = 'HitRate'
            hit_value.setAttribute("id", "hit" + id)
            hit_value.innerText = digimonarray[event.target.value]['hitrate']
            tr7.appendChild(hit)
            tr7.appendChild(hit_value)
            table.appendChild(tr7)
            let tr8 = document.createElement('tr')
            let de = document.createElement('td')
            let de_value = document.createElement('td')
            de.setAttribute('class', 'border border-dark')
            de_value.setAttribute('class', 'border border-dark')
            de.innerText = 'Defensa'
            de_value.setAttribute("id", "de" + id)
            de_value.innerText = digimonarray[event.target.value]['defense']
            tr8.appendChild(de)
            tr8.appendChild(de_value)
            table.appendChild(tr8)
            let tr9 = document.createElement('tr')
            let ev = document.createElement('td')
            let ev_value = document.createElement('td')
            ev.setAttribute('class', 'border border-dark')
            ev_value.setAttribute('class', 'border border-dark')
            ev.innerText = 'Evasión'
            ev_value.setAttribute("id", "ev" + id)
            ev_value.innerText = digimonarray[event.target.value]['evasion']
            tr9.appendChild(ev)
            tr9.appendChild(ev_value)
            table.appendChild(tr9)
            let tr10 = document.createElement('tr')
            let skill1 = document.createElement('td')
            let skill1_value = document.createElement('td')
            skill1.setAttribute('class', 'border border-dark')
            skill1_value.setAttribute('class', 'border border-dark')
            skill1.innerText = 'Daño de la Skill F1 a nivel 25'
            skill1_value.setAttribute("id", "skill1_" + id)
            skill1_value.innerText = (digimonarray[event.target.value]['skill1_base'] + (digimonarray[event.target.value]['skill1_increment'] * 24))
            tr10.appendChild(skill1)
            tr10.appendChild(skill1_value)
            table.appendChild(tr10)
            let tr11 = document.createElement('tr')
            let skill2 = document.createElement('td')
            let skill2_value = document.createElement('td')
            skill2.setAttribute('class', 'border border-dark')
            skill2_value.setAttribute('class', 'border border-dark')
            skill2.innerText = 'Daño de la Skill F2 a nivel 25'
            skill2_value.setAttribute("id", "skill2_" + id)
            skill2_value.innerText = (digimonarray[event.target.value]['skill2_base'] + (digimonarray[event.target.value]['skill2_increment'] * 24))
            tr11.appendChild(skill2)
            tr11.appendChild(skill2_value)
            table.appendChild(tr11)
            if(digimonarray[event.target.value]['skill3'] != null){
                let tr12 = document.createElement('tr')
                let skill3 = document.createElement('td')
                let skill3_value = document.createElement('td')
                skill3.setAttribute('class', 'border border-dark')
                skill3_value.setAttribute('class', 'border border-dark')
                skill3.innerText = 'Daño de la Skill F3 a nivel 25'
                skill3_value.setAttribute("id", "skill3_" + id)
                skill3_value.innerText = (digimonarray[event.target.value]['skill3_base'] + (digimonarray[event.target.value]['skill3_increment'] * 24))
                tr12.appendChild(skill3)
                tr12.appendChild(skill3_value)
                table.appendChild(tr12)
            }
            if(digimonarray[event.target.value]['skill4'] != null){
                let tr13 = document.createElement('tr')
                let skill4 = document.createElement('td')
                let skill4_value = document.createElement('td')
                skill4.setAttribute('class', 'border border-dark')
                skill4_value.setAttribute('class', 'border border-dark')
                skill4.innerText = 'Daño de la Skill F4 a nivel 25'
                skill4_value.setAttribute("id", "skill4_" + id)
                skill4_value.innerText = (digimonarray[event.target.value]['skill4_base'] + (digimonarray[event.target.value]['skill4_increment'] * 24))
                tr13.appendChild(skill4)
                tr13.appendChild(skill4_value)
                table.appendChild(tr13)
            }
            tabla.appendChild(table)
            if (id == 1) {
                aux1 = id
            } else if(id == 2) {
                aux2 = id
            }

            if (aux1 == 1 && aux2 == 2) {
                addStyles();
            }
        }
    }

    select1.addEventListener('change', function(event) {
        createTable(event, table1, 1)
    })
    select2.addEventListener('change', function(event) {
        createTable(event, table2, 2)
    })
</script>
@stop