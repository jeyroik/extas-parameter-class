# extas-parameter-class

Расширение для параметров Extas. Позволяет использовать шаблон "class".

# Установка

`composer require jeyroik/extas-parameter-class:*`

# Использование

## Настройка

В extas-совместимой конфигурации для любого параметра (т.е. сущности, реализующей интерфейс `extas\interafces\parameters\IParameter`):

```json
{
  "entities_with_parameters": [
    {
      "name": "some name",
      "parameters": [
        {
          "name": "entity.dispatcher",
          "value": "some\\class\\Name",
          "template": "class",
          "template@class": {
            "args": [
              {
                "name": "arg1",
                "value": "some predefined argument"
              },
              {
                "name": "arg2",
                "value": "some predefined argument 2"
              }
            ]
          }
        }
      ]
    }
  ]
}
```

## Применение

```php
$entity = $entityRepo->one(['name' => 'some name']);
$dispatcher = $entity->getParameter('entity.dispatcher')->getValue();
/**
 * $dispacther is onstance of some\class\Name
 */
```