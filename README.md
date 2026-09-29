# 🚀 Age Verifier & Access Log System 🆔

[🇺🇸 English Version](#-english-version) | [🇧🇷 Versão em Português](#-versão-em-português)

---

## 🇺🇸 English Version

### 📌 Description
A PHP project designed to handle form submissions, validate business logic, persist data in text files, and process requests via the `POST` method.

### 🎯 Key Features
- **🖥️ HTML Form:** Collects **Name** and **Birth Year** from the user.  
- **⚙️ Age Calculation:** Dynamically calculates age based on the current year.  
- **✅ Majority Validation (18+):**  
  - Shows a success alert in the browser.  
  - Saves **Name** and **Age** into `log_acessos.txt`.  
- **🚫 Minor (<18):**  
  - Shows an access denied alert.  

### 📚 Concepts Applied
- **File Handling (I/O):** Data persistence using `fopen`, `fwrite`, and `fclose`.  
- **Form Processing:** Handling `POST` requests with `$_SERVER['REQUEST_METHOD']`.  
- **Conditional Logic & Type Casting:** Using `(int)` for calculations and `if/else` for validation.  

---

## 🇧🇷 Versão em Português

### 📌 Descrição
Projeto em PHP desenvolvido para manipulação de formulários, validação de regras de negócio, persistência de dados em arquivos de texto e processamento de requisições via método `POST`.

### 🎯 Funcionalidades
- **🖥️ Formulário HTML:** Coleta **Nome** e **Ano de Nascimento** do usuário.  
- **⚙️ Cálculo de Idade:** Calcula dinamicamente a idade com base no ano atual.  
- **✅ Validação de Maioridade (18+):**  
  - Exibe alerta de sucesso no navegador.  
  - Salva **Nome** e **Idade** no arquivo `log_acessos.txt`.  
- **🚫 Menor (<18):**  
  - Exibe alerta de acesso negado.  

### 📚 Conceitos Aplicados
- **Manipulação de Arquivos (I/O):** Persistência de dados com `fopen`, `fwrite` e `fclose`.  
- **Processamento de Formulários:** Tratamento de requisições `POST` com `$_SERVER['REQUEST_METHOD']`.  
- **Lógica Condicional & Casting de Tipos:** Conversão `(int)` para cálculos e uso de `if/else` para validação.  

---
