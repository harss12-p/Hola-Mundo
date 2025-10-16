<?php
class Mensaje{
    public static function all():array{
        $pdo= Database::getConnection();
        $st = $pdo->query("Select * from mensajes order by id_mensajes desc");
        return $st->fetchAll();
    }

    public static function find(int $id):?array{
        $pdo= Database::getConnection();
        $st = $pdo->prepare("select * from mensajes where id_mensajes=?");
        $st->execute([$id]);
        $r = $st->fetch();
        return $r ?: null;
    }

    public static function create(array $d):int{
        $pdo= Database::getConnection();
        $st = $pdo->prepare("insert into mensajes(titulo, descripcion, imagen, fecha)values(?,?,?,?)");
        $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo->lastInsertId();
    }

    public static function updateById(int $id, array $d):int{
        $pdo= Database::getConnection();
        $st = $pdo->prepare("update mensajes set titulo=?, descripcion=?, imagen=?, fecha=? where id_mensajes=?");
        $st->execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha'], $id]);
        return $st->rowCount();
    }

    public static function deleteById(int $id):int{
        $pdo= Database::getConnection();
        $st = $pdo->prepare("delete from mensajes where id_mensajes=?");
        $st->execute([$id]);
        return $st->rowCount();
    }
}
