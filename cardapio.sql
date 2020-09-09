  
CREATE DATABASE cardapio;

USE cardapio;
--
-- Banco de dados: `cardapio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nome_func` varchar(255) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `prato` varchar(255) NOT NULL,
  `acompanhamento` varchar(255) NOT NULL
);



-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `id_prato` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ;



--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD UNIQUE KEY `nome_func` (`nome_func`);

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD KEY `id_prato` (`id_prato`);

