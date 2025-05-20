<?php

Class SQL_Select {

    private string $field;
    private string $table;

    public function __construct(string $field, string $table) {
        $this->field = $field;
        $this->table = $table;
    }

    public function get_SmplSQL(string $where): string {
        return "SELECT {$this->field} FROM {$this->table} WHERE {$where}";
    }

    public function get_CmplxSQL(string $cdts): string {
        return "SELECT {$this->field} FROM {$this->table} {$cdts}";
    }

    public function execute_Simple_SQL($where,PDO $pdo): array {
        $sql = $this->get_SmplSQL($where);
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute_Cmplx_SQL($cdts, PDO $pdo): array {
        $sql = $this->get_CmplxSQL($cdts);
        $stmt = $pdo->prepare($sql);
        // var_dump($stmt);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>