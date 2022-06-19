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
* NodeJs
* NPM
### Back-end
* PHP
* Mysql
### Para executar o software é necessario o uso do wampserver ou xampp

# Inicialização

```
npm install
```

## Material

```sql
DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `qtd` int(11) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `contato` varchar(15) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
```
