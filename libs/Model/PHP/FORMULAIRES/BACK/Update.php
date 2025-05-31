<?php

Class Update extends BaseForm {
    private function update($db_columns, $db_table, $cdt, $cdt_plus = "", $cdts = "") {
        // On verifie si les champs sont remplis
        if (!empty($_POST)) {
            // On verifie si les champs sont remplis
            $update_sql = new SQL_Update($db_table, $db_columns, $_POST);
            // var_dump($update_sql);
            if (empty($cdt) || $cdt === "") {
                $result = $update_sql->execute_Cmplx_SQL($cdt_plus, $cdts, $this->pdo);
            }
            elseif (empty($cdt_plus) && empty($cdts)) {
                $result = $update_sql->execute_Simple_SQL($cdt, $this->pdo);
            } else {
                $result = $update_sql->execute_Cmplx_SQL($cdt_plus, $cdts, $this->pdo);
            }
            unset($_POST);
            if ($result) {
                $this->message = "Modification effectuée avec succès";

                echo json_encode ([
                'Status' =>'Success',
                'message' => "Modifier avec succés dans $db_table",
                'banner' => [
                    'id' => $this->id_banner,
                    'message' => "Modifier avec succés dans $db_table"
                ],
            ]);

                return true;
            } else {
                $this->message = "Erreur lors de la modification";
                return false;
            }
        } else {
            $this->message = "Aucun champ n'a été modifié";
            return false;
        }
    }

    public function set_update($db_columns, $db_table, $cdt, $cdt_plus = "", $cdts = "") {
        if ($this->isPost) {
            return $this->update($db_columns, $db_table, $cdt, $cdt_plus, $cdts);
        } else {
            $this->message = "Aucune donnée à mettre à jour";
            return false;
        }
    }

}


?>