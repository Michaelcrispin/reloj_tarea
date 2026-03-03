h = 14
m = 25

if h < 0 or h > 23 or m < 0 or m > 59:
    print("Hora o minuto inválido.")
    exit()

hh = h % 12

if m == 0:
    mf = 0
    hf = 12 - hh
else:
    mf = 60 - m
    hf = 12 - hh - 1

if hf <= 0:
    hf += 12

if hf == 0:
    hf = 12

print(f"{hf:02d}:{mf:02d}")
