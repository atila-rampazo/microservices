#!/bin/bash

echo "Baixando Microservicos..."
cd pedidos && docker-compose down
cd .. && cd produtos && docker-compose down
cd .. && cd clientes && docker-compose down

echo "Microservicos em Deitados..."