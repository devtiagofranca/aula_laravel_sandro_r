## Diretórios
`/app`        - Contem os scripts/classes do seu projeto [php]

`/config`     - Pasta de configurações do sistema (Laravel)

`/database`   - Contém suas migrations (versionamento de db), seeders, factories

              e seu arquivo sqlite padrão (caso use)
`/public`     - Contém o index inicial do seu projeto. 

              Ficam aqui os assets (css, js, img, etc)

`/resources`  - Contém os arquivos de recursos de sistema do lado da view (front);

`/routes`     - Vai tratar suas rotas e entregar para as controllers as devidas requisições conforme o verbo HTTP solicitado

`/storage`    - Armazena arquivos de cache, compilados do template, logs e outros

`/tests`      - Armazena seus testes unitários

`/vendor`     - **[NÃO VERSIONAR]** armazena os arquivos dos pacotes(packages) do composer. **[NÃO VERSIONAR]**

## Arquivos

/.env       - **[NÃO VERSIONAR]** Arquivo de environment(ambiente) onde 
              são definidas as configuraçoes da aplicação. **[NÃO VERSIONAR]**
              Se precisar criar um exemplo, clie-o no `.env.example`

/artisan    - Ferramenta de CLI para executar ações de console no projeto. Para chamar, execute `php artisan [comando]`

---
## MVC

[M]odel      - Banco e conexões

[V]iew       - Interface com o usuário

[C]ontroller - Que faz a comunicação entre M e V