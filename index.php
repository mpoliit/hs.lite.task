<?php

interface iTestClass
{
    public function func1 ();

}

abstract class aTestClass
{
    public function func1 (){
        print_r('abstract class<br>');
    }
}

class TestInterfaceClass implements iTestClass
{

    public function func1()
    {
        // TODO: Implement func1() method.
    }
}

class TestAbstarctClass extends aTestClass
{
    public function func2(){
        print_r('class extends abstract class<br>');
    }
}

$class = new TestAbstarctClass();
$class->func1();
$class->func2();

/**
 * В интерфейсе не указываются свойства, а описываются только названия методов которые должны быть реализованы во всех класах которые имплементируют данный интерфейс.
 * В абстрактном классе описывается методы который могут наследовать другие классы, а так же переопределять.
 * По факту TestAbstarctClass наследует абстрактный класс aTestClass. При инициализации класса TestAbstarctClass можно использовать как метод func2 который в дочернем классе, так и func1 который описан в абстрактном (родительском) классе. А интерфейс iTestClass обязует все классы которые имплементируеют его, реализовывать функции которые описаны в данном интерфейсе. Получается что TestInterfaceClass обязан реализовать у себя метод func1
 */