<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

[//]: # (<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests../badge.svg" alt="Build Status"></a>)

<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto


Objetivo do projeto foi iniciar com o framework Laravel, para isso criei uma lista de tarefas simples.

As tarefas sao listadas abaixo do formulario para input.

E possivel excluir as tarefas e edita-las.

- Para editar a aplicacao ira abrir uma outra pagina onde e feita a edicao da tarefa.

Cada tarefa tem um id no banco de dados (MySql)

- O id e a chave primaria para identificacao da tarefa, assim e possivel edita-la
- o title e o nome da tarefa
- Junto com mais duas colunas de timestamp, de quando a tarefa foi criada e quando foi editada.


Para rodar o projeto basta utilizar o comando 

``` 
sail up
```

O url para acesso da aplicacao e:

```
http://localhost/tasks
```

Ainda sera implementado testes.
