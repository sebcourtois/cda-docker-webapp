FROM node:18-alpine AS builder
LABEL authors="SCOURTOIS"

WORKDIR build

COPY ../../frontend .
RUN npm install
RUN npm run build

FROM node:18-alpine

WORKDIR /var/www

COPY --from=builder build /var/www

EXPOSE 3000

CMD ["npm", "start"]
