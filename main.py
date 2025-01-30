import json

# Função para adicionar ID sequencial a cada item no JSON
def add_sequential_id(json_data):
    for index, item in enumerate(json_data, start=1):
        item['id'] = index
    return json_data

# Lê o arquivo JSON
with open('./assets/json/tarifas.json', 'r') as file:
    data = json.load(file)

# Adiciona os IDs sequenciais
data_with_ids = add_sequential_id(data)

# Salva o novo arquivo JSON com os IDs
with open('data_with_ids.json', 'w') as file:
    json.dump(data_with_ids, file, indent=4)

print("IDs sequenciais adicionados e novo arquivo gerado!")
