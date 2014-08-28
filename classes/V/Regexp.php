<?php

/**
 * Classe que contém as funções de validações de expressões
 * A ser usada nas classes de interface para validação de campos
 *
 * @author Elias
 */
trait Regexp {

    // Retorna True se só contém letras. False se não
    public function validaAlfabetico($subject) {
        return ctype_alpha($subject);
    }

    // Retorna True se só contém letras ou espaços. False se não
    public function validaAlfabeticoEspaco($subject) {
        $pattern = "/^[A-z\s]{1,}$/";
        return preg_match($pattern, $subject);
    }

    // Retorna True se só contém letras, espaços ou símbolos. False se não
    public function validaAlfabeticoSimbolo($subject) {
        $pattern = "/^[A-z_\.\-\s]{1,}$/";
        return preg_match($pattern, $subject);
    }

    // Retorna True se tem valor alfanumerico. False se não
    public function validaAlfanumerico($subject) {
        $pattern = "/^[A-z0-9_\.\-\s]{1,}$/";
        return preg_match($pattern, $subject);
    }

    // Retorna True se só contém números. False se não
    public function validaNumerico($subject) {
        return is_numeric($subject);
    }

    // Retorna True se segue formato de cpf. False se não
    public function validaCpf($subject) {
        $pattern = "/^[0-9]{11}$/";
        return preg_match($pattern, $subject);
    }

    // Retorna True se segue formato de rg. False se não
    public function validaRg($subject) {
        $pattern = "/^[A-z]{1,2}[0-9]{7,8}$/";
        return preg_match($pattern, $subject);
    }

    // Retorna True se ddd e telefonem tem a quantidade de caracteres esperada. False se não
    // Se sim concatena os 2 substituindo o valor de telefone
    public function validaTelefone($ddd, &$telefone) {
        $pattern1 = "/^[0-9]{2}$/";
        $pattern2 = "/^[0-9]{8,9}$/";
        if (preg_match($pattern1, $ddd) && preg_match($pattern2, $telefone)) {
            $telefone = '(' . $ddd . ') ' . substr($telefone, 0, 4) . '-' . substr($telefone, 4, 5);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Retorna True se segue formato de email. False se não
    public function validaEmail($subject) {
        $pattern = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
        return preg_match($pattern, $subject);
    }

    /*

     * -------- EM OBRAS ---------

      // Retorna True se segue formato de crm. False se não
      public function validaCrm($subject){
      $pattern = "/^  $/";
      return preg_match($pattern, $subject);
      }


     */

    // Retorna True se segue formato monetario (ex: 15.00 ; 15,00). False se não.
    // Caso o valor use ',' para separar o valor decimal, será substituido por '.' .
    public function validaDinheiro(&$subject) {
        $pattern = "/^[^0-9]*[\.][0-9]{2}$/";
        $pattern2 = "/^[^0-9]*[,][0-9]{2}$/";
        if (preg_match($pattern, $subject)) {
            //Converte para tipo double
            $subject += 0.0;
            return TRUE;
        } else if (preg_match($pattern2, $subject)) {
            //Altera ',' para '.'
            $replacementPattern = "/^(\d+)[\.][\d+]{2}$/";
            $replacement = "$1\.{2}$2";
            $subject = preg_replace($replacementPattern, $replacement, $subject);
            //Converte para tipo double
            $subject += 0.0;
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // Retorna True se a senha é forte. False se não
    public function forcaSenha($subject) {
        $pattern = "/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/";
        return preg_match($pattern, $subject);
    }

    // Retorna True se só contém letras. False se não
    public function validaSexo($subject) {
        $pattern = "/^[MFmf]{1}$/";
        return preg_match($pattern, $subject);
    }

    // Converte data para o formato YYYY-MM-DD.
    public function validaData($subject) {
        $timestamp = strtotime($subject) or die();
        $data = date('Y-m-d', $timestamp);
        return $data;
    }

    // Converte hora para o formato HH:MM:SS.
    public function validaHora($subject) {
        $timestamp = strtotime($subject) or die();
        $data = date('H:i:s', $timestamp);
        return $data;
    }

}
