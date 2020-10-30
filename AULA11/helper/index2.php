<?php

function gravarUsuario(string $nomeUsuario, int $codigo, string $privilegio = 'ADMIN'): string {
  return $nomeUsuario . ' - ' . $codigo . ' - ' . $privilegio;
}

echo gravarUsuario('GUSTAVO', 1, 'FUNCIONARIO');
