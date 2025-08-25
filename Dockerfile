# Usa a imagem oficial do PHP com apache
FROM php:8.2-apache

#Porta usada pela Render
ENV PORT=8080

#Ativa o mod_rewrite para URLs amigáveis
RUN a2emod rewrite
