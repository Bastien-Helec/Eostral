<?php

Class SQL_Select {

    private string $params;
    private string $table;
    private string $where;

    public function __construct(string $params, string $table, string $where) {
        $this->params = $params;
        $this->table = $table;
        $this->where = $where;
    }

    public function getSQL(): string {
        return "SELECT {$this->params} FROM {$this->table} WHERE {$this->where}";
    }

    public function execute(PDO $pdo): array {
        $sql = $this->getSQL();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>