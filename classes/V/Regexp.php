<?php
/**
 * Classe que contém as funções de validações de expressões
 * A ser usada nas classes de interface para validação de campos
 *
 * @author Elias
 */
class Regexp {
    // Retorna True se só contém letras. False se não
    public function alfabetico($subject){
        $pattern = "/^[A-z]{1,}$/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se só contém letras ou espaços. False se não
    public function alfabeticoEspaco($subject){
        $pattern = "/^[A-z\s]{1,}$/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se só contém letras, espaços ou símbolos. False se não
    public function alfabeticoSimbolo($subject){
        $pattern = "/^[A-z_\.\-\s]{1,}$/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se tem valor alfanumerico. False se não
    public function alfanumerico($subject){
        $pattern = "/^[A-z0-9_\.\-\s]{1,}$/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se só contém números. False se não
    public function numerico($subject){
        $pattern = "/^[0-9]{1,}$/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se segue formato de cpf. False se não
    public function cpf($subject){
        $pattern = "/^  $/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se segue formato de rg. False se não
    public function rg($subject){
        $pattern = "/^  $/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se ddd e telefonem tem a quantidade de caracteres esperada. False se não
    // Se sim concatena os 2 substituindo o valor de telefone
    public function telefone($ddd, &$telefone){
        $pattern1 = "/^ [0-9]{2} $/";
        $pattern2 = "/^ [0-9]{8|9} $/";
        if(preg_match($pattern1, $ddd) && preg_match($pattern2, $telefone)){
            $telefone = '(' . $ddd . ') ' . substr($telefone, 0, 4) . '-' . substr($telefone, 4, 5);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    // Retorna True se segue formato de email. False se não
    public function email($subject){
        $pattern = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se segue formato de crm. False se não
    public function crm($subject){
        $pattern = "/^  $/";
        return preg_match($pattern, $subject);
    }
    // Retorna True se segue formato monetario (ex: 15.00 ; 15,00). False se não.
    // Caso o valor use ',' para separar o valor decimal, será substituido por '.' .
    public function dinheiro(&$subject){
        $pattern = "/^[^0-9]*[\.][0-9]{2}$/";
        $pattern2 = "/^[^0-9]*[,][0-9]{2}$/";
        if(preg_match($pattern, $subject)){
            return TRUE;
        }
        else if(preg_match($pattern2, $subject)){
            //Altera ',' para '.'
            $replacementPattern = "/^(\d+)[\.][\d+]{2}$/";
            $replacement = "$1\.{2}$2";
            $subject = preg_replace($replacementPattern, $replacement, $subject);
            //Converte para tipo double
            $subject += 0.0;
        }
        else{
            return FALSE;
        }
    }
    // Retorna True se a senha é forte. False se não
    public function forcaSenha($subject){
        $pattern = "/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/";
        return preg_match($pattern, $subject);
    }
}
