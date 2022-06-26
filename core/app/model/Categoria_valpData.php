<?php
class Categoria_valpData {
	public static $tablename = "categoria_valp";



	public function Categoria_valpData(){
		$this->nombre = "";
		$this->fecha_creada = "NOW()";
	}

	public function add(){
		$sql = "insert into categoria_valp (nombre,fecha_creada) ";
		$sql .= "value (\"$this->nombre\",$this->fecha_creada)";
		Executor::doit($sql);
	}

	public function add_whit_image(){
		$sql = "insert into categoria_valp (nombre,imagen,fecha_creada) ";
		$sql .= "value (\"$this->nombre\",\"$this->imagen\",$this->fecha_creada)";
		Executor::doit($sql);
	} 

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto CategoriaData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_image(){
		$sql = "update ".self::$tablename." set imagen=\"$this->imagen\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new Categoria_valpData());

	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new Categoria_valpData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Categoria_valpData());

	}


}

?>