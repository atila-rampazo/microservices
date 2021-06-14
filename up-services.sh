#!/bin/bash

echo "Subindo Microservicos..."
cd pedidos && docker-compose up -d
cd .. && cd produtos && docker-compose up -d
cd .. && cd clientes && docker-compose up -d

echo "Microservicos em pé..."