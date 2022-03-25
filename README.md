# Projeto-integrador
Projeto destinado ao Projeto Integrador e TG da Faculdade de Tecnologia de São Paulo no curso de Gestão da Tecnologia da Informação na Unidade de Franco da Rocha <br><br>
Este Projeto esta destinado a resolver uma problemática na Escola Estadual Benedito fagundes Marques, localizada no centro da cidade.<br><br>
A proposta é um software para o gerenciamento do estoque/almoxarifado.

## Tecnologias usadas
### Front-end
* Javascript
* CSS
* HTML
* jQuery
* Materialize
* Mask-plugin jQuery
### Back-end
* PHP
* Mysql
### Para executar o software é necessario o uso do wampserver ou xampp

## Login

```sql
CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

  INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES (NULL, 'teste', MD5('teste'));
```