## Tropillas Setup CakePHP Application on Windows

## Installation

- composer create-project --prefer-dist cakephp/app tropillas
- composer require cakephp/bake
- composer require cakephp/migrations "@stable"
- bin\cake plugin load Migrations
   
## Migrations
- bin\cake bake migration createCampos name:string description:text created modified
- bin\cake bake migration createLotes name:string description:text campo_id:integer created modified
- bin\cake bake migration addLotesForeignkeyCampos
- bin\cake bake migration createTropasTable name:string description:text cantidad:integer created modified
- bin\cake bake migration createMovimientos fecha:datetime campo1_id:integer lote1_id:integer campo2_id:integer lote2_id:integer tropa_id:integer cantidad:integer
- bin\cake bake migration addMovimientosForeignkey
- bin\cake migrations migrate

## Controller & Model
- bin\cake bake all campos
- bin\cake bake all lotes
- bin\cake bake all tropas
- bin\cake bake all movimientos

