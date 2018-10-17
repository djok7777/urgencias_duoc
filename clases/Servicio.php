<?php

include_once 'Conexion.php';
include_once 'EspecialistaMedico.php';
include_once 'Nivel.php';
include_once 'PersonalAdministrativo.php';
include_once 'Paciente.php';
include_once 'Acompañante.php';
include_once 'Farmaceutico.php';
include_once 'Atencion.php';
include_once 'Especialidad.php';
include_once 'DetalleEspecialidad.php';
include_once 'Atencion.php';
include_once 'Medicamento.php';
include_once 'DetalleMedicamento.php';

class Servicio {

    private $con;

    function __construct() {
        $this->con = new Conexion();
    }

//Especialista
    public function ingresarEspecialista($rut_especialista, $nombres, $apellido_paterno, $apellido_materno, $fono, $hora_inicio, $hora_termino, $sector, $password, $id_nivel) {
        $sql = "INSERT INTO especialista_medico (rut_especialista, nombres, apellido_paterno, apellido_materno, fono, hora_inicio, hora_termino, sector, password, id_nivel) "
                . "VALUES ('$rut_especialista','$nombres','$apellido_paterno','$apellido_materno','$fono','$hora_inicio','$hora_termino','$sector','$password','$id_nivel')";
        
        $result = $this->con->query($sql);
        $exito = false;
        if ($result == 1) {
            $exito = true;
        }
        else{
            $exito = false;
        }
        return $exito;
    }

    public function buscarEspecialista($rut_especialista) {
        $sql = "select count(*) from especialista_medico where rut_especialista = '$rut_especialista'";

        $resultado = $this->con->query($sql);
        $fila = mysqli_fetch_array($resultado);
        $cant = $fila[0];

        if ($cant == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function retornarEspecialista($rut_especialista, $password) {

        $especialista = null;
        $sql = "select * from especialista_medico where rut_especialista = '$rut_especialista' and password = '$password'";
        $resultado = $this->con->query($sql);
        if (mysqli_num_rows($resultado) != 0) {

            $fila = mysqli_fetch_array($resultado);

            $especialista = new EspecialistaMedico();

            $especialista->setRutEspecialista($fila["rut_especialista"]);
            $especialista->setPassword("");
        }
        return $especialista;
    }

    public function retornarEspecialista2($rut_especialista) {
        $esp = null;
        $sql = "SELECT * FROM especialista_medico WHERE rut_especialista = '$rut_especialista'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $esp = new EspecialistaMedico();

            $esp->setRut_especialista($fila["rut_especialista"]);
            $esp->setNombres($fila["nombres"]);
            $esp->setApellido_paterno($fila["apellido_paterno"]);
            $esp->setApellido_materno($fila["apellido_materno"]);
            $esp->setFono($fila["fono"]);
            $esp->setHora_inicio($fila["hora_inicio"]);
            $esp->setHora_termino($fila["hora_termino"]);
            $esp->setSector($fila["sector"]);
            $esp->setPassword($fila["password"]);
            $esp->setNivel($fila["id_nivel"]);
        }
        return $esp;
    }

    public function autentificarEspecialista($rut_especialista, $password) {
        $esp = null;
        $sql = "SELECT * FROM especialista_medico WHERE rut_especialista = '$rut_especialista' AND password = '$password'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $esp = new EspecialistaMedico();

            $esp->setRut_especialista($fila["rut_especialista"]);
            $esp->setNombres($fila["nombres"]);
            $esp->setApellido_paterno($fila["apellido_paterno"]);
            $esp->setApellido_materno($fila["apellido_materno"]);
            $esp->setFono($fila["fono"]);
            $esp->setHora_inicio($fila["hora_inicio"]);
            $esp->setHora_termino($fila["hora_termino"]);
            $esp->setSector($fila["sector"]);
            $esp->setPassword($fila["password"]);
            $esp->setNivel($fila["id_nivel"]);
        }
        return $esp;
    }

    public function listarEspecialistaMedico() {
        $especialistas = array();
        $esp = null;

        $sql = "SELECT rut_especialista, nombres, apellido_paterno, apellido_materno, fono, hora_inicio, hora_termino, sector, password, id_nivel FROM especialista_medico";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $esp = new EspecialistaMedico();
            $esp->setRut_especialista($fila["rut_especialista"]);
            $esp->setNombres($fila["nombres"]);
            $esp->setApellido_paterno($fila["apellido_paterno"]);
            $esp->setApellido_materno($fila["apellido_materno"]);
            $esp->setFono($fila["fono"]);
            $esp->setHora_inicio($fila["hora_inicio"]);
            $esp->setHora_termino($fila["hora_termino"]);
            $esp->setSector($fila["sector"]);
            $esp->setPassword($fila["password"]);
            $esp->setNivel($fila["id_nivel"]);

            array_push($especialistas, $esp);
        }
        return $especialistas;
    }
    /*
    public function eliminarMedico($rut) {
        $sql = "DELETE FROM especialista_medico WHERE rut_especialista = $rut";
        $exito = $this->con->query($sql);
        return $exito;
    }*/

//Acompañante
    public function agregarAcompañante($rut_acompañante, $nombres, $apellido_paterno, $apellido_materno, $grado_parentesco, $fono) {

        $sql = "INSERT INTO acompañante (rut_acompañante, nombres, apellido_paterno,apellido_materno,grado_parentesco,fono) "
                . "VALUES ('$rut_acompañante','$nombres','$apellido_paterno','$apellido_materno','$grado_parentesco','$fono')";

        return $this->con->query($sql);
    }

    public function listarAcompañante() {
        $acompañantes = array();
        $acomp = null;

        $sql = "SELECT rut_acompañante, nombres, apellido_paterno, apellido_materno, grado_parentesco, fono FROM acompañante";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $acomp = new Acompañante();
            $acomp->setRut_acompañante($fila["rut_acompañante"]);
            $acomp->setNombres($fila["nombres"]);
            $acomp->setApellido_paterno($fila["apellido_paterno"]);
            $acomp->setApellido_materno($fila["apellido_materno"]);
            $acomp->setGrado_parentesco($fila["grado_parentesco"]);
            $acomp->setFono($fila["fono"]);
            array_push($acompañantes, $acomp);
        }

        print_r($acompañantes);
        return $acompañantes;
    }

    public function buscarAcompañante($rut_acompañante) {
        $sql = "select count(*) from acompañante where rut_acompañante = '$rut_acompañante'";
        $resultado = $this->con->query($sql);
        $fila = mysqli_fetch_array($resultado);
        $cant = $fila[0];

        if ($cant == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function retornarAcompañante($rut_acompañante) {
        $acomp = null;
        $sql = "SELECT rut_acompañante, nombres, apellido_paterno, apellido_materno, grado_parentesco, fono FROM acompañante WHERE rut_acompañante = '$rut_acompañante'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {
//echo "chao"; exit();
            $fila = mysqli_fetch_array($result);

            $acomp = new Acompañante();

            $acomp->setRut_acompañante($fila["rut_acompañante"]);
            $acomp->setNombres($fila["nombres"]);
            $acomp->setApellido_paterno($fila["apellido_paterno"]);
            $acomp->setApellido_materno($fila["apellido_materno"]);
            $acomp->setGrado_parentesco($fila["grado_parentesco"]);
            $acomp->setFono($fila["fono"]);
        }
        return $acomp;
    }

//Administrador
    public function ingresarAdministrador($rut_personal_adm, $nombres, $apellido_paterno, $apellido_materno, $titulo, $fono, $password, $id_nivel) {

        $sql = "INSERT INTO personal_administrativo (rut_personal_adm, nombres, apellido_paterno, apellido_materno, titulo, fono, password, id_nivel) "
                . "VALUES ('$rut_personal_adm', '$nombres', '$apellido_paterno', '$apellido_materno', '$titulo', '$fono', '$password', '$id_nivel')";
//$password = sha1($password);
        return $this->con->query($sql);
    }

    public function autentificarAdministrador($rut_personal_adm, $password) {
        $per = null;
//$password = sha1($password);
        $sql = "SELECT * FROM personal_administrativo WHERE rut_personal_adm = '$rut_personal_adm' AND password = '$password'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $per = new PersonalAdministrativo();

            $per->setRut_personal_adm($fila["rut_personal_adm"]);
            $per->setNombres($fila["nombres"]);
            $per->setApellido_paterno($fila["apellido_paterno"]);
            $per->setApellido_materno($fila["apellido_materno"]);
            $per->setTitulo($fila["titulo"]);
            $per->setFono($fila["fono"]);
            $per->setPassword($fila["password"]);
            $per->setNivel($fila["id_nivel"]);
        }
        return $per;
    }

    public function buscarAdministrador($rut) {
        $sql = "SELECT count(*) FROM personal_administrativo WHERE rut_personal_adm = '$rut'";

        $result = $this->con->query($sql);
        $fila = mysqli_fetch_array($result);
        $cant = $fila[0];

        if ($cant == 1) {
            return true;
        }
        return false;
    }
    
    public function buscarAdministradorPorRut($rut) {
        $per = null;
        $sql = "select * from personal_administrativo where rut_personal_adm = '$rut'";
        $resultado = $this->con->query($sql);
        if (mysqli_num_rows($resultado) != 0) {
            $fila = mysqli_fetch_array($resultado);

            $per = new PersonalAdministrativo();

            $per->setRut_personal_adm($fila["rut_personal_adm"]);
            $per->setNombres($fila["nombres"]);
            $per->setApellido_paterno($fila["apellido_paterno"]);
            $per->setApellido_materno($fila["apellido_materno"]);
            $per->setTitulo($fila["titulo"]);
            $per->setFono($fila["fono"]);
            $per->setPassword($fila["password"]);
            $per->setNivel($fila["id_nivel"]);
        }
        return $per;
    }

    public function listarAdministrador() {
        $administrativos = array();
        $adm = null;

        $sql = "SELECT rut_personal_adm, nombres, apellido_paterno, apellido_materno, titulo, fono, id_nivel FROM personal_administrativo";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $adm = new PersonalAdministrativo();
            $adm->setRut_personal_adm($fila["rut_personal_adm"]);
            $adm->setNombres($fila["nombres"]);
            $adm->setApellido_paterno($fila["apellido_paterno"]);
            $adm->setApellido_materno($fila["apellido_materno"]);
            $adm->setTitulo($fila["titulo"]);
            $adm->setFono($fila["fono"]);
            $adm->setNivel($fila["id_nivel"]);
            array_push($administrativos, $adm);
        }
        return $administrativos;
    }

    public function eliminarAdministrador($rut) {
        $sql = "DELETE FROM personal_administrativo WHERE rut_personal_adm = $rut";
        $exito = $this->con->query($sql);
        return $exito;
    }
    
    public function ModificarAdministrador($rut_personal_adm, $nombres, $apellido_paterno, $apellido_materno, $titulo, $fono, $id_nivel) {

        $sql = "UPDATE personal_administrativo SET rut_personal_adm = '$rut_personal_adm',nombres= '$nombres',apellido_paterno= '$apellido_paterno',apellido_materno= '$apellido_materno',titulo= '$titulo',fono=$fono, id_nivel= $id_nivel WHERE rut_personal_adm = $rut_personal_adm";
        return $this->con->query($sql);
    }

//Nivel
    public function listarNivel() {
        $niveles = array();
        $nivel = null;
        $sql = "select id_nivel,nombre from nivel";
        $resultado = $this->con->query($sql);
        while ($fila = mysqli_fetch_array($resultado)) {
            $nivel = new Nivel();
            $nivel->setId_nivel($fila["id_nivel"]);
            $nivel->setNombre($fila["nombre"]);

            array_push($niveles, $nivel);
        }
        return $niveles;
    }

    public function buscarNivel($id_nivel) {
        $niv = null;
        $sql = "SELECT * FROM nivel WHERE id_nivel = $id_nivel";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $niv = new Nivel();

            $niv->setId_nivel($fila["id_nivel"]);
            $niv->setNombre($fila["nombre"]);
        }
        return $niv;
    }

//Paciente
    public function ingresarPaciente($rut_paciente, $nombres, $apellido_paterno, $apellido_materno, $fecha_nacimiento, $sexo, $estado_civil, $domicilio, $grupo_sanguineo, $fono) {
//        $sql = "INSERT INTO paciente (rut_paciente, nombres, apellido_paterno, apellido_materno,fecha_nacimiento, sexo, estado_civil, domicilio, grupo_sanguineo', fono) "
//                . "VALUES ('$rut_paciente','$nombres','$apellido_paterno','$apellido_materno','$fecha_nacimiento','$sexo','$estado_civil','$domicilio','$grupo_sanguineo,'$fono')";
        $sql = "INSERT INTO paciente (rut_paciente, nombres, apellido_paterno, apellido_materno,fecha_nacimiento, sexo, estado_civil, domicilio, grupo_sanguineo, fono)"
                . "VALUES ('$rut_paciente','$nombres','$apellido_paterno','$apellido_materno','$fecha_nacimiento','$sexo','$estado_civil','$domicilio','$grupo_sanguineo','$fono')";

        return $this->con->query($sql);
    }

    public function buscarPaciente($rut_paciente) {
        $p = null;
        $sql = "SELECT * FROM paciente WHERE rut_paciente = '$rut_paciente'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $p = new Paciente();

            $p->setRut_paciente($fila["rut_paciente"]);
            $p->setNombres($fila["nombres"]);
            $p->setApellido_paterno($fila["apellido_paterno"]);
            $p->setApellido_materno($fila["apellido_materno"]);
            $p->setFecha_nacimiento($fila["fecha_nacimiento"]);
            $p->setSexo($fila["sexo"]);
            $p->setEstado_civil($fila["estado_civil"]);
            $p->setDomicilio($fila["domicilio"]);
            $p->setGrupo_sanguineo($fila["grupo_sanguineo"]);
            $p->setFono($fila["fono"]);
        }
        return $p;
    }

//Farmaceutico
    public function ingresarFarmaceutico($rut_farmaceutico, $nombres, $apellido_paterno, $apellido_materno, $hora_inicio, $hora_termino, $password, $id_nivel) {

        $sql = "INSERT INTO farmaceutico (rut_farmaceutico, nombres, apellido_paterno, apellido_materno, hora_inicio, hora_termino, password, id_nivel) "
                . "VALUES ('$rut_farmaceutico','$nombres','$apellido_paterno','$apellido_materno','$hora_inicio','$hora_termino','$password','$id_nivel')";

        return $this->con->query($sql);
    }

    public function buscarFarmaceutico($rut_farmaceutico) {
        $f = null;
        $sql = "SELECT * FROM farmaceutico WHERE rut_farmaceutico = '$rut_farmaceutico'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $f = new Farmaceutico();

            $f->setRut_farmaceutico($fila["rut_farmaceutico"]);
            $f->setNombres($fila["nombres"]);
            $f->setApellido_paterno($fila["apellido_paterno"]);
            $f->setApellido_materno($fila["apellido_materno"]);
            $f->setHora_inicio($fila["hora_inicio"]);
            $f->setHora_termino($fila["hora_termino"]);
            $f->setPassword($fila["password"]);
            $f->setNivel($fila["id_nivel"]);
        }
        return $f;
    }

    public function listarFarmaceutico() {

        $farmaceuticos = array();
        $farmaceutico = null;

        $sql = "SELECT rut_farmaceutico, nombres, apellido_paterno, apellido_materno, hora_inicio, hora_termino, id_nivel FROM farmaceutico";

        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $farmaceutico = new Farmaceutico();
            $farmaceutico->setRut_farmaceutico($fila["rut_farmaceutico"]);
            $farmaceutico->setNombres($fila["nombres"]);
            $farmaceutico->setApellido_paterno($fila["apellido_paterno"]);
            $farmaceutico->setApellido_materno($fila["apellido_materno"]);
            $farmaceutico->setHora_inicio($fila["hora_inicio"]);
            $farmaceutico->setHora_termino($fila["hora_termino"]);
            $farmaceutico->setNivel($fila["id_nivel"]);
            array_push($farmaceuticos, $farmaceutico);
        }
        return $farmaceuticos;
    }

//Medicamento
    public function agregarMedicamento($id_medicamento, $nombre, $descripcion, $fecha_caducidad, $contraindicaciones, $stock, $proveedor) {

        $sql = "INSERT INTO medicamento (id_medicamento, nombre, descripcion, fecha_caducidad,contraindicaciones,stock,proveedor) "
                . "VALUES ('$id_medicamento','$nombre','$descripcion','$fecha_caducidad','$contraindicaciones','$stock','$proveedor')";

        return $this->con->query($sql);
    }

//Atención
    public function agregarAtencion($rut_paciente, $rut_acompañante, $rut_personal_adm, $rut_especialista, $sintomas_detectados, $nivel_urgencia, $tipo, $hora, $fecha, $reposo, $cantidad_dias, $diagnostico, $estado) {

//Obtener maximo de numeros de atencion
        $nro_atencion = 0;
        $sql = "SELECT MAX(nro_atencion) FROM atencion";
        $resultado = $this->con->query($sql);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $nro_atencion = $fila["MAX(nro_atencion)"] + 1;
            }
        } else {
            $nro_atencion = 1;
        }

//Ingreso de atencion
        $sql = "INSERT INTO atencion (nro_atencion, rut_paciente, rut_acompañante, rut_personal_adm, rut_especialista, sintomas_detectados, nivel_urgencia, "
                . "tipo, hora, fecha, reposo, cantidad_dias, diagnostico, estado) "
                . "VALUES ('$nro_atencion','$rut_paciente','$rut_acompañante','$rut_personal_adm','$rut_especialista','$sintomas_detectados',"
                . "'$nivel_urgencia','$tipo','$hora','$fecha','$reposo','$cantidad_dias','$diagnostico', '$estado')";
        $this->con->query($sql);
    }

//Especialidad
    public function listarEspecialidad() {
        $especialidades = array();
        $esp = null;

        $sql = "SELECT id_especialidad, nombre FROM especialidad";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $esp = new Especialidad();
            $esp->setId_especialidad($fila["id_especialidad"]);
            $esp->setNombre($fila["nombre"]);
            array_push($especialidades, $esp);
        }
        return $especialidades;
    }

//Detalle especialidad
    public function listarDetalleEspecialidad() {
        $detalleEsp = array();
        $det = null;

        $sql = "SELECT rut_especialista, id_especialidad, institucion_egreso, fecha_egreso, anos_ejercidos FROM detalle_especialidad";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $det = new DetalleEspecialidad();
            $det->setEspecialistaMedico($fila["rut_especialista"]);
            $det->setEspecialidad($fila["id_especialidad"]);
            $det->setInstitucion_egreso($fila["institucion_egreso"]);
            $det->setFecha_egreso($fila["fecha_egreso"]);
            $det->setAnos_ejercidos($fila["anos_ejercidos"]);
            array_push($detalleEsp, $det);
        }
        return $detalleEsp;
    }

    public function autentificarFarmaceutico($rut, $password) {
        $farm = null;
        $sql = "SELECT * FROM farmaceutico WHERE rut_farmaceutico = '$rut' AND password = '$password'";
        $result = $this->con->query($sql);
        if (mysqli_num_rows($result) != 0) {

            $fila = mysqli_fetch_array($result);

            $farm = new Farmaceutico();
            $farm->setRut_farmaceutico($fila["rut_farmaceutico"]);
            $farm->setNombres($fila["nombres"]);
            $farm->setApellido_paterno($fila["apellido_paterno"]);
            $farm->setApellido_materno($fila["apellido_materno"]);
            $farm->setHora_inicio($fila["hora_inicio"]);
            $farm->setHora_termino($fila["hora_termino"]);
            $farm->setPassword($fila["password"]);
            $farm->setNivel($fila["id_nivel"]);
        }
        return $farm;
    }

    public function retornarNivel($ingreso) {
        
    }

    public function login($rutV, $passV) {
        $vEspecialista = null;
        $vFarmaceutico = null;
        $vAdministrador = null;
        
        $vEspecialista = $this->autentificarEspecialista($rutV, $passV);
        $vFarmaceutico = $this->autentificarFarmaceutico($rutV, $passV);
        $vAdministrador = $this->autentificarAdministrador($rutV, $passV);

        if ($vEspecialista != null) {
            return $vEspecialista;
        } else if ($vFarmaceutico != null) {
            return $vFarmaceutico;
        } else if ($vAdministrador != null) {
            return $vAdministrador;
        } else {
            return null;
        }
    }

    public function listarAtenciones() {
        $atenciones = array();
        $at = null;

        $sql = "select * from atencion";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $at = new Atencion();
            $at->setNro_atencion($fila["nro_atencion"]);
            $at->setRut_paciente($fila["rut_paciente"]);
            $at->setRut_acompañante($fila["rut_acompañante"]);
            $at->setRut_personal_adm($fila["rut_personal_adm"]);
            $at->setRut_especialista($fila["rut_especialista"]);
            $at->setSintomas_detectados($fila["sintomas_detectados"]);
            $at->setNivel_urgencia($fila["nivel_urgencia"]);
            $at->setTipo($fila["tipo"]);
            $at->setHora($fila["hora"]);
            $at->setFecha($fila["fecha"]);
            $at->setReposo($fila["reposo"]);
            $at->setCantidad_dias($fila["cantidad_dias"]);
            $at->setDiagnostico($fila["diagnostico"]);
            $at->setEstado($fila["estado"]);
            
            array_push($atenciones, $at);
        }
        return $atenciones;
    }
    
    function ultimaAtencion($rut_especialista){
            $at = null;
            $sql = "select * from atencion where rut_especialista = '$rut_especialista' and estado = 'EN CURSO'";
            $result = $this->con->query($sql);
        
            if (mysqli_num_rows($result) != 0) {
                $fila = mysqli_fetch_array($result);
                $at = new Atencion();
                $at->setNro_atencion($fila["nro_atencion"]);
                $at->setRut_paciente($fila["rut_paciente"]);
                $at->setRut_acompañante($fila["rut_acompañante"]);
                $at->setRut_personal_adm($fila["rut_personal_adm"]);
                $at->setRut_especialista($fila["rut_especialista"]);
                $at->setSintomas_detectados($fila["sintomas_detectados"]);
                $at->setNivel_urgencia($fila["nivel_urgencia"]);
                $at->setTipo($fila["tipo"]);
                $at->setHora($fila["hora"]);
                $at->setFecha($fila["fecha"]);
                $at->setReposo($fila["reposo"]);
                $at->setCantidad_dias($fila["cantidad_dias"]);
                $at->setDiagnostico($fila["diagnostico"]);
                $at->setEstado($fila["estado"]);
            }
            
            return $at;
    }
    
    public function listarMedicamentos() {
        $medicamentos = array();
        $med = null;

        $sql = "SELECT * FROM medicamento";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $med = new Medicamento();
            $med->setId_medicamento($fila["id_medicamento"]);
            $med->setNombre($fila["nombre"]);
            $med->setDescripcion($fila["descripcion"]);
            $med->setFecha_caducidad($fila["fecha_caducidad"]);
            $med->setContraindicaciones($fila["contraindicaciones"]);
            $med->setStock($fila["stock"]);
            $med->setProveedor($fila["proveedor"]);
            
            array_push($medicamentos, $med);
        }
        return $medicamentos;
    }
    
    public function finalizarAtencion($nro_atencion, $sintomas, $cantidad_dias, $diagnostico){
        if ($cantidad_dias > 0) {
            $reposo = "S";
        }
        $estado = "FINALIZADO";
        $sql = "update atencion set sintomas_detectados = '$sintomas', reposo = '$reposo', cantidad_dias = '$cantidad_dias', diagnostico = '$diagnostico', estado = '$estado' where nro_atencion = '$nro_atencion' ;";
        $result = $this->con->query($sql);
        //echo $sql; exit();
        return $result;
    }

    public function listarDetalleMedicamentos(){
        $detalles = array();
        $detM = null;

        $sql = "SELECT * FROM detalle_medicamento";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $detM = new DetalleMedicamento();
            $detM->setAtencion($fila["nro_atencion"]);
            $detM->setMedicamento($fila["id_medicamento"]);
            $detM->setFarmaceutico($fila["rut_farmaceutico"]);
            $detM->setDosis($fila["dosis"]);
            $detM->setCantidad_dias($fila["cantidad_dias"]);
            $detM->setAnotaciones($fila["anotaciones"]);
            $detM->setEstado($fila["estado"]);
            
            array_push($detalles, $detM);
        }
        return $detalles;
    }
    
    public function agregarDetalleMedicamento($nro_atencion,$id_medicamento,$dosis,$cantidad_dias,$anotaciones){
        $estado = "PENDIENTE";
        $sql = "INSERT INTO detalle_medicamento (nro_atencion, id_medicamento, rut_farmaceutico, dosis, cantidad_dias, anotaciones, estado) "
        . "VALUES ('$nro_atencion','$id_medicamento', null,'$dosis','$cantidad_dias','$anotaciones', '$estado')";
        return $this->con->query($sql);
    }

    
    public function ultimaAtencionDePaciente($rut){
        //Obtener maximo de numeros de atencion
        $nro_atencion = 0;
        $sql = "SELECT MAX(nro_atencion) FROM atencion WHERE rut_paciente = '$rut'";
        $resultado = $this->con->query($sql);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $nro_atencion = $fila["MAX(nro_atencion)"];
            }
        }
        
        if ($nro_atencion == null) {
            return 0;
        }
        else{
            return $nro_atencion;
        }
    }
    
    //Actualiza estado de un detalle_medicamento según "ENTREGADO" o "PENDIENTE"
    public function actualizarEstadoDet_Med($nro_atencion, $id_medicamento){
        $sql = "UPDATE detalle_medicamento SET estado = 'ENTREGADO' WHERE nro_atencion ='$nro_atencion' AND id_medicamento = '$id_medicamento'";
        return $this->con->query($sql);
    }
    
    
    
    
    
    public function eliminarMedico($rut) {
        $sql = "DELETE FROM especialista_medico WHERE rut_especialista = '$rut'";
        $exito = $this->con->query($sql);
        return $exito;
    }
    
    public function ModificarMedico($rut_especialista, $nombres, $apellido_paterno, $apellido_materno, $fono, $hora_inicio, $hora_termino, $password, $id_nivel) {

        $sql = "UPDATE especialista_medico SET rut_especialista = '$rut_especialista',nombres= '$nombres',apellido_paterno= '$apellido_paterno',apellido_materno= '$apellido_materno',fono= '$fono',hora_inicio= '$hora_inicio', hora_termino= '$hora_termino', password= '$password', id_nivel= '$id_nivel' WHERE rut_especialista = '$rut_especialista'";
        return $this->con->query($sql);
    }
    
    public function buscarMedicoPorRut($rut) {
        $per = null;
        $sql = "select * from especialista_medico where rut_especialista = '$rut'";
        $resultado = $this->con->query($sql);
        if (mysqli_num_rows($resultado) != 0) {
            $fila = mysqli_fetch_array($resultado);

            $per = new EspecialistaMedico();

            $per->setRut_especialista($fila["rut_especialista"]);
            $per->setNombres($fila["nombres"]);
            $per->setApellido_paterno($fila["apellido_paterno"]);
            $per->setApellido_materno($fila["apellido_materno"]);
            $per->setFono($fila["fono"]);
            $per->setHora_inicio($fila["hora_inicio"]);
            $per->setHora_termino($fila["hora_termino"]);
            $per->setSector($fila["sector"]);
            $per->setPassword($fila["password"]);
            $per->setNivel($fila["id_nivel"]);
        }
        return $per;
    }
    
    public function eliminarPaciente($rut) {
        $sql = "DELETE FROM paciente WHERE rut_paciente = '$rut'";
        $exito = $this->con->query($sql);
        return $exito;
    }
    
    public function buscarPacientePorRut($rut) {
        $per = null;
        $sql = "select * from paciente where rut_paciente = '$rut'";
        $resultado = $this->con->query($sql);
        if (mysqli_num_rows($resultado) != 0) {
            $fila = mysqli_fetch_array($resultado);

            $per = new Paciente();

            $per->setRut_paciente($fila["rut_paciente"]);
            $per->setNombres($fila["nombres"]);
            $per->setApellido_paterno($fila["apellido_paterno"]);
            $per->setApellido_materno($fila["apellido_materno"]);
            $per->setFecha_nacimiento($fila["fecha_nacimiento"]);
            $per->setSexo($fila["sexo"]);
            $per->setEstado_civil($fila["estado_civil"]);
            $per->setDomicilio($fila["domicilio"]);
            $per->setGrupo_sanguineo($fila["grupo_sanguineo"]);
            $per->setFono($fila["fono"]);
        }
        return $per;
    }
    
    public function ModificarPaciente($rut_paciente, $nombres, $apellido_paterno, $apellido_materno, $estado_civil, $domicilio, $grupo_sanguineo, $fono) {

        $sql = "UPDATE paciente SET rut_paciente = '$rut_paciente',nombres= '$nombres',apellido_paterno= '$apellido_paterno',apellido_materno= '$apellido_materno', estado_civil= '$estado_civil', domicilio= '$domicilio', grupo_sanguineo= '$grupo_sanguineo', fono= '$fono' WHERE rut_paciente = '$rut_paciente'";
        return $this->con->query($sql);
    }
public function listarPaciente() {
        $pacientes = array();
        $paciente = null;

        $sql = "SELECT rut_paciente, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, sexo, estado_civil, domicilio, grupo_sanguineo, fono FROM paciente";
        $result = $this->con->query($sql);

        while ($fila = mysqli_fetch_array($result)) {
            $paciente = new Paciente();
            $paciente->setRut_paciente($fila["rut_paciente"]);
            $paciente->setNombres($fila["nombres"]);
            $paciente->setApellido_paterno($fila["apellido_paterno"]);
            $paciente->setApellido_materno($fila["apellido_materno"]);
            $paciente->setFecha_nacimiento($fila["fecha_nacimiento"]);
            $paciente->setSexo($fila["sexo"]);
            $paciente->setEstado_civil($fila["estado_civil"]);
            $paciente->setDomicilio($fila["domicilio"]);
            $paciente->setGrupo_sanguineo($fila["grupo_sanguineo"]);
            $paciente->setFono($fila["fono"]);

            array_push($pacientes, $paciente);
        }
        return $pacientes;
    }
    
    public function eliminarFarmaceutico($rut) {
        $sql = "DELETE FROM farmaceutico WHERE rut_farmaceutico = '$rut'";
        $exito = $this->con->query($sql);
        return $exito;
    }
    
    public function buscarFarmaceuticoPorRut($rut) {
        $per = null;
        $sql = "select * from farmaceutico where rut_farmaceutico = '$rut'";
        $resultado = $this->con->query($sql);
        if (mysqli_num_rows($resultado) != 0) {
            $fila = mysqli_fetch_array($resultado);

            $per = new Farmaceutico();

            $per->setRut_farmaceutico($fila["rut_farmaceutico"]);
            $per->setNombres($fila["nombres"]);
            $per->setApellido_paterno($fila["apellido_paterno"]);
            $per->setApellido_materno($fila["apellido_materno"]);
            $per->setHora_inicio($fila["hora_inicio"]);
            $per->setHora_termino($fila["hora_termino"]);
            $per->setPassword($fila["password"]);
            $per->setNivel($fila["id_nivel"]);
        }
        return $per;
    }
    
    public function ModificarFarmaceutico($rut_farmaceutico, $nombres, $apellido_paterno, $apellido_materno, $hora_inicio, $hora_termino, $password, $id_nivel) {

        $sql = "UPDATE farmaceutico SET rut_farmaceutico = '$rut_farmaceutico',nombres= '$nombres',apellido_paterno= '$apellido_paterno',apellido_materno= '$apellido_materno',hora_inicio= '$hora_inicio', hora_termino= '$hora_termino', password= '$password', id_nivel= '$id_nivel' WHERE rut_farmaceutico = '$rut_farmaceutico'";
        return $this->con->query($sql);
    }
}
