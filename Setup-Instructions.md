# Instruções de configuração

## Configurando no Localhost

Você pode usar qualquer servidor de hospedagem local, mas recomendamos usar [MAMP](https://www.mamp.info/en/windows/), pois permite definir um local personalizado, em vez de colocar e atualizar as alterações sempre indo para a pasta `htdocs`. Além disso, não perturba nenhuma instalação existente!

Aqui, demonstraremos o uso do servidor MAMP.

### Configurando servidor

1. Instale o MAMP.
2. Clone este repositório.
3. Abra MAMP > Preferências > Servidor Web > Selecionar.
   - Selecione a pasta do repositório
   - ![Menu Preferências](https://i.imgur.com/cJhMiQG.png)
4. Clique em `Ok` > `Iniciar Servidor` e depois clique em `Abrir página WebStart`
5. Na página da web, vá para `Ferramentas` > `phpMyAdmin`
6. Uma nova página será aberta.

### Configurando banco de dados

1. A nova página abrirá `phpMyAdmin` . Aqui você precisa criar um banco de dados.
2. Clique em `Novo` e defina o nome como - `courier_db`
3. Após a criação, abra esse banco de dados e vá para a guia `SQL` e copie e cole os comandos de [aqui](./database/courier_db.sql) e execute-os na guia `SQL` clicando no botão `Ir` .

### Configurando direitos de acesso

1. No mesmo banco de dados, vá para a aba `Contas de usuário` e clique em `Adicionar conta de usuário`.
2. Configure adequadamente -
   - ![image-20201208165734232](https://i.imgur.com/zC9MIU1.png)
3. Role para baixo e clique em `Ir` no lado direito para salvar as alterações.
4. Depois de salvar as alterações, vá para a seção `Database` e ​​clique em `courier_db` e clique em `Go` para salvar as alterações. ![image-20201208165959729](https://i.imgur.com/s1GNOkZ.png)

5. Na próxima página, marque `Verificar tudo` e `Ir` para salvar as alterações.

### Lançamento do site

Digite `localhost` na barra de URL e o site deverá estar instalado e funcionando! Ou clique [aqui](localhost)
