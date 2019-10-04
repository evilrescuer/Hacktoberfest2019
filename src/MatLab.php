<?php

/**
 * Class MatLab
 *
 * Criado Hélio Cardoso R. de Souza
 * User: Helio Cardoso <heliosouza@gmail.com>
 * Date: 04/10/19
 */
class MatLab
{
    const PATH = "/home/helio/Projetos/Hacktoberfest2019-1/issue1.txt";


    public function soma(): void
    {
        $this->somaFromFileTxt();
    }

    private function somaFromFileTxt(): void
    {
        $handler = fopen(self::PATH, 'r');
        $result = 1;
        file_put_contents(
            '/home/helio/Projetos/Hacktoberfest2019-1/issue1.txt',
            $result , FILE_APPEND
        );
        fclose($handler);

    }
}
